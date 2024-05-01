<?php

namespace App\Controllers;

use App\Models\PostModel;

class Beranda extends BaseController
{

    public $postModel;

    public function __construct()
    {
        $this->postModel = new PostModel();
    }

    public function index()
    {
        $posts = $this->postModel->query_get_all();

        $data = array(
            'title' => 'Berita',
            'posts' => $posts
        );

        return view('templates/header', $data)
            . view('beranda')
            . view('templates/footer');
    }
}
