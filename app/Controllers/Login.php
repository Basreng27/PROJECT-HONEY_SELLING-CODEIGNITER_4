<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function index()
    {
        return view('Pages/Static/login_regist/login');
    }
}
