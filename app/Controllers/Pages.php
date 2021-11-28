<?php

namespace App\Controllers;

use App\Models\ArticleModel;

class Pages extends BaseController
{
    protected $articleModel;

    public function __construct() {
        $this->articleModel = new ArticleModel();
    }

    public function index()
    {
        $data = [
            'active'    => 'home'
        ];

        return view('pages/home', $data);
    }

    public function booking()
    {
        $data = [
            'active'    => 'booking'
        ];

        return view('pages/booking', $data);
    }

    public function article()
    {

        $article = $this->articleModel->findAll();

        $data = [
            'active'    => 'article',
            'article' => $article
        ];

        // $articleModel = new ArticleModel();
        

        return view('pages/article', $data);
    }

    public function detail($id)
    {
        echo $id;
    }
}
