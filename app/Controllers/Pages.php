<?php

namespace App\Controllers;

class Pages extends BaseController
{
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
        $data = [
            'active'    => 'article'
        ];

        return view('pages/article', $data);
    }
}
