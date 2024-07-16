<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class mp extends BaseController
{
    public function index()
    {
        return view('pages/backend/system_setting/v_mp');
    }
}
