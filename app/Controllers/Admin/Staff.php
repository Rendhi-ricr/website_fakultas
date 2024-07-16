<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Staff extends BaseController
{
    public function index()
    {
        return view('pages/backend/staff/v_staff');
    }
    public function tambah()
    {
        return view('pages/backend/staff/t_staff');
    }
}
