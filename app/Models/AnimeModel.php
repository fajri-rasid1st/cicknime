<?php

namespace App\Models;

use CodeIgniter\Model;

class AnimeModel extends Model
{
    protected $table = "anime";
    protected $useTimestamps = true;
    protected $allowedFields = ["title", "type", "status", "released", "duration", "genres", "score", "poster", "slug"];

    public function get_detail_anime($slug)
    {
        // this is equals to 'SELECT * FROM anime WHERE 'slug' = $slug' LIMIT (1)
        return $this->where(["slug" => $slug])->first();
    }

    public function search($keyword)
    {
        return $this->table('anime')->like('title', $keyword);
    }
}
