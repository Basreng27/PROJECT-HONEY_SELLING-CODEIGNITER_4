<?php

namespace App\Controllers;

class Main extends BaseController
{
    public function index()
    {
        return view('Pages/User/home');
    }

    public function product()
    {
        return view('Pages/User/product');
    }
}
