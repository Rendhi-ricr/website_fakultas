<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Gallery extends BaseController
{
    public function index()
    {
        return view('pages/backend/gallery/v_gallery');
    }
    public function tambah()
    {
        return view('pages/backend/gallery/t_gallery');
    }
}
