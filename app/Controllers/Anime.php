<?php

namespace App\Controllers;

use App\Models\AnimeModel;
use \CodeIgniter\Config\Services;
use \CodeIgniter\Exceptions\PageNotFoundException;

class Anime extends BaseController
{
    protected $anime_model;

    public function __construct()
    {
        // connect to database
        $this->anime_model = new AnimeModel();
    }

    public function index()
    {
        // pagination
        $current_page = $this->request->getVar('page_anime') ? $this->request->getVar('page_anime') : 1;

        // searching
        $keyword = $this->request->getVar('keyword');

        // check if keyword empty or not
        if ($keyword) {
            $animes = $this->anime_model->search($keyword);
        } else {
            $animes = $this->anime_model;
        }

        // send data
        $data = [
            "title" => "Anime List",
            "animes" => $animes->orderBy('created_at', 'DESC')->paginate(5, 'anime'),
            "pager" => $this->anime_model->pager,
            "current_page" => $current_page,
        ];

        // return view
        return view("anime/index", $data);
    }

    public function detail($slug)
    {

        // send data
        $data = [
            "title" => "Detail Anime",
            "detail" => $this->anime_model->get_detail_anime($slug)
        ];
        // throw exception when detail is null
        if (empty($data["detail"])) {
            throw new PageNotFoundException("Anime '$slug' not found");
        }
        // return view
        return view("anime/detail", $data);
    }

    public function insert()
    {
        // send data
        $data = [
            "title" => "Insert New Anime",
            "validation" => Services::validation()
        ];
        // return view
        return view("anime/insert", $data);
    }

    public function save_insert()
    {
        // validation input
        if (!$this->validate([
            'title' => [
                'rules' => 'required|is_unique[anime.title]',
                'errors' => [
                    'required' => 'The title field is required.',
                    'is_unique' => 'The title of this anime already exists.'
                ]
            ],
            'poster' => [
                'rules' => 'max_size[poster,500]|is_image[poster]|mime_in[poster,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'The maximum image size is 500kb.',
                    'is_image' => 'Allowed file extensions: .jpg, .jpeg, .png.',
                    'mime_in' => 'Allowed file extensions: .jpg, .jpeg, .png.'
                ]
            ],
            'genres' => 'required',
            'duration' => 'required|integer',
            'score' => 'required|decimal',
            'released' => 'required'
        ])) {
            // kembali ke form insert anime
            return redirect()->to(base_url("anime/insert"))->withInput();
        }

        // file uploaded
        $uploaded_file = $this->request->getFile("poster");

        // check if file is upluoad or not
        if ($uploaded_file->getError() === 4) {
            // make default file name
            $file_name = "default.png";
        } else {
            // generate a random file name
            $file_name = $uploaded_file->getRandomName();
            // move file to img folder
            $uploaded_file->move("img", $file_name);
        }

        // save data
        $this->anime_model->save(
            [
                "poster" => $file_name,
                "title" => $this->request->getVar("title"),
                "type" => $this->request->getVar("type"),
                "status" => $this->request->getVar("status"),
                "genres" => $this->request->getVar("genres"),
                "duration" => $this->request->getVar("duration") . " min",
                "slug" => url_title($this->request->getVar("title"), "-", true),
                "score" => sprintf("%.2f", $this->request->getVar("score") + 0),
                "released" => date("M j, Y", strtotime($this->request->getVar("released"))),
            ]
        );
        // set flash message (insert complete)
        session()->setFlashData("message", "Anime has been added.");
        // kembali ke daftar anime
        return redirect()->to(base_url("anime"));
    }

    public function delete($id)
    {
        // search poster by $id
        $poster = $this->anime_model->find($id)["poster"];
        // delete poster at folder img except default poster
        if ($poster != "default.png") unlink("img/" . $poster);
        // delete record where $id matches the table's primaryKey
        $this->anime_model->delete($id);
        // set flash message (delete complete)
        session()->setFlashData("message", "Anime has been deleted.");
        // return to anime list
        return redirect()->to(base_url("anime"));
    }

    public function update($slug)
    {
        // send data
        $data = [
            "title" => "Update Anime",
            "validation" => Services::validation(),
            "detail" => $this->anime_model->get_detail_anime($slug)
        ];
        // return view
        return view("anime/update", $data);
    }

    public function save_update($id)
    {
        // cek title of anime
        $old_data = $this->anime_model->get_detail_anime($this->request->getVar("slug"));

        if ($old_data["title"] == $this->request->getVar("title")) {
            $title_rule = 'required';
        } else {
            $title_rule = 'required|is_unique[anime.title]';
        }

        // validation input
        if (!$this->validate([
            'title' => [
                'rules' => $title_rule,
                'errors' => [
                    'required' => 'The title field is required.',
                    'is_unique' => 'The title of this anime already exists.'
                ]
            ],
            'poster' => [
                'rules' => 'max_size[poster,500]|is_image[poster]|mime_in[poster,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'The maximum image size is 500kb.',
                    'is_image' => 'Allowed file extensions: .jpg, .jpeg, .png.',
                    'mime_in' => 'Allowed file extensions: .jpg, .jpeg, .png.'
                ]
            ],
            'genres' => 'required',
            'duration' => 'required|integer',
            'score' => 'required|decimal',
            'released' => 'required'
        ])) {
            // kembali ke form update anime
            return redirect()->to(base_url("anime/update") . "/" . $this->request->getVar("slug"))->withInput();
        }

        // file uploaded
        $uploaded_file = $this->request->getFile("poster");
        // old poster
        $old_poster = $this->request->getVar("old-poster");

        // check if file is upluoad or not
        if (!empty($this->request->getVar("delete-poster"))) {
            // set default file
            $file_name = "default.png";
            // delete old file
            if ($old_poster != $file_name) unlink("img/" . $old_poster);
        } else if ($uploaded_file->getError() === 4) {
            // if not, file name not changes
            $file_name = $old_poster;
        } else {
            // generate a random file name
            $file_name = $uploaded_file->getRandomName();
            // move file to img folder
            $uploaded_file->move("img", $file_name);
            // delete old file
            if ($old_poster != "default.png") unlink("img/" . $old_poster);
        }

        // save data
        $this->anime_model->save(
            [
                "id" => $id,
                "poster" => $file_name,
                "title" => $this->request->getVar("title"),
                "type" => $this->request->getVar("type"),
                "status" => $this->request->getVar("status"),
                "genres" => $this->request->getVar("genres"),
                "duration" => $this->request->getVar("duration") . " min",
                "slug" => url_title($this->request->getVar("title"), "-", true),
                "score" => sprintf("%.2f", $this->request->getVar("score") + 0),
                "released" => date("M j, Y", strtotime($this->request->getVar("released"))),
            ]
        );
        // set flash message (insert complete)
        session()->setFlashData("message", "Anime has been updated.");
        // kembali ke detail anime bersangkutan
        return redirect()->to(base_url("anime/" . $this->request->getVar("slug")));
    }
}
