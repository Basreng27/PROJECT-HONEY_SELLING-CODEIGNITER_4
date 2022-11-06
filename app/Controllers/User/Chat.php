<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;
use App\Models\Users_model;

class Chat extends BaseController
{
    protected $UsersModel;

    public function __construct()
    {
        $this->UsersModel = new Users_model();
    }

    // public function index()
    // {
    //     if (session()->get('stat') != 'login-user') {
    //         return redirect('/');
    //     }

    //     // $data = [
    //     //     'data_keranjang' => $this->KeranjangModel->getKeranjang(session()->get('id_user'))
    //     // ];

    //     return view('Pages/User/chat');
    // }

    public function index()
    {
        if (session()->get('stat') != 'login-user') {
            return redirect('/');
        }

        $data['not_data_user'] = $this->UsersModel->getAllUser(session()->get('id_user'));
        $data['data_user'] = $this->UsersModel->find(session()->get('id_user'));
        return view('Pages/User/chat', $data);
    }
}
