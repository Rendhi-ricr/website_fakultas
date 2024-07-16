<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Slider extends BaseController
{
    public function index()
    {
        return view('pages/backend/system_setting/v_slider');
    }
    public function tambah()
    {
        return view('pages/backend/system_setting/t_slider');
    }
}
