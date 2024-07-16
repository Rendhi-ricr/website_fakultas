<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Message extends BaseController
{
    public function index()
    {
        return view('pages/backend/message/v_message');
    }
}
