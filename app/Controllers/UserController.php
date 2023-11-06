<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class UserController extends BaseController
{
    public function login()
    {
        return view('login_user');
    }
}
