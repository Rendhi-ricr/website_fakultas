<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class News extends BaseController
{
    public function index()
    {
        return view('pages/backend/news/v_news');
    }

    public function tambah()
    {
        return view('pages/backend/news/t_news');
    }
}
