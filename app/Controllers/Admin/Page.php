<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Page extends BaseController
{
    public function index()
    {
        return view('pages/backend/page/v_page');
    }

    public function tambah()
    {
        return view('pages/backend/page/t_page');
    }
}
