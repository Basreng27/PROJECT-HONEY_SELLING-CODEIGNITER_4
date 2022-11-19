<?php

namespace App\Controllers;

use App\Models\Users_model;
use App\Models\Set_dashboard_model;

class Regist extends BaseController
{
    protected $UsersModel;
    protected $Set_dashboardModel;

    public function __construct()
    {
        $this->UsersModel = new Users_model();
        $this->Set_dashboardModel = new Set_dashboard_model();
    }

    public function index()
    {
        $data = [
            'validation' => \Config\Services::validation(),
            'gagal' => '',
            'set' => $this->Set_dashboardModel->find(1)
        ];

        return view('Pages/Static/login_regist/regist', $data);
    }

    public function prosesRegist()
    {
        if (!$this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi',
                ]
            ],
            'username' => [
                'rules' => 'required|is_unique[users.username]',
                'errors' => [
                    'required' => '{field} harus diisi',
                    'is_unique' => '{field} sudah terdaftar'
                ]
            ],
            'password' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
        ])) {
            return redirect()->to('/regist')->withInput();
            // $data['gagal'] = 'gagal';
            // return view('Pages/Static/login_regist/regist', $data);
        }

        $this->UsersModel->save([
            'nama' => $this->request->getVar('nama'),
            'username' => $this->request->getVar('username'),
            'password' => md5($this->request->getVar('password')),
        ]);

        session()->setFlashdata('berhasil', 'Data berhasil ditambahkan');
        return redirect()->to('/login');
    }
}
