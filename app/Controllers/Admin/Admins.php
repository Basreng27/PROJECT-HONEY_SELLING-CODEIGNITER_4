<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Admins extends BaseController
{
    public function index()
    {
        return view('Pages/Admin/home');
    }

    public function product()
    {
        return view('Pages/Admin/Products/product');
    }

    public function review()
    {
        return view('Pages/Admin/Review/review');
    }

    public function admin()
    {
        return view('Pages/Admin/Admin/admin');
    }
}
