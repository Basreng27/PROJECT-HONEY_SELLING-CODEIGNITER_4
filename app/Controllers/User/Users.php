<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;
use App\Models\Keranjang_model;
use App\Models\Set_dashboard_model;

class Users extends BaseController
{
    protected $KeranjangModel;
    protected $Set_dashboardModel;

    public function __construct()
    {
        $this->KeranjangModel = new Keranjang_model();
        $this->Set_dashboardModel = new Set_dashboard_model();
    }

    public function keranjang()
    {
        if (session()->get('stat') != 'login-user') {
            return redirect('/');
        }

        $data = [
            'validation' => \Config\Services::validation(),
            'data_keranjang' => $this->KeranjangModel->getKeranjang(session()->get('id_user')),
            'set' => $this->Set_dashboardModel->find(1)
        ];

        return view('Pages/User/keranjang', $data);
    }

    public function terimakasih()
    {
        if (session()->get('stat') != 'login-user') {
            return redirect('/');
        }

        $data = [
            'validation' => \Config\Services::validation(),
            // 'data_keranjang' => $this->KeranjangModel->getKeranjang(session()->get('id_user')),
            'set' => $this->Set_dashboardModel->find(1)
        ];

        return view('Pages/User/terimakasih', $data);
    }
}
