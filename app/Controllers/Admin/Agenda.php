<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Agenda extends BaseController
{
    public function index()
    {
        return view('pages/backend/agenda/vagenda');
    }

    public function tambah()
    {
        return view('pages/backend/agenda/t_agenda');
    }
}
