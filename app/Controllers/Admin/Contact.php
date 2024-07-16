<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Contact extends BaseController
{
    public function index()
    {
        return view('pages/backend/contact/v_contact');
    }
}
