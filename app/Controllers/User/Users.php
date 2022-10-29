<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;

class Users extends BaseController
{
    public function keranjang()
    {
        return view('Pages/User/keranjang');
    }
}
