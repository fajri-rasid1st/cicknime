<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = ["title" => "Home"];

        return view('pages/home', $data);
    }

    public function about()
    {
        $data = [
            "title" => "About",
            "about" => ["Muhammad Fajri Rasid", 19, "Web developer"],
        ];

        return view('pages/about', $data);
    }

    public function contact()
    {
        $data = [
            "title" => "Contact",
            "contact" => [
                "whatsapp" => "Whatsapp",
                "instagram" => "Instagram",
                "twitter" => "Twitter",
                "linkedin" => "Linkedin",
                "github" => "Github",
            ],
        ];

        return view('pages/contact', $data);
    }
}
