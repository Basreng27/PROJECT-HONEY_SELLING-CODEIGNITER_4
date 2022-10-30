<?php

namespace App\Controllers;

use App\Models\Admins_model;
use App\Models\Users_model;

class Login extends BaseController
{
    protected $AdminsModel;
    protected $UsersModel;

    public function __construct()
    {
        $this->AdminsModel = new Admins_model();
        $this->UsersModel = new Users_model();
    }

    public function index()
    {
        $data = [
            'validation' => \Config\Services::validation()
        ];
        return view('Pages/Static/login_regist/login', $data);
    }

    public function prosesLogin()
    {
        if (!$this->validate([
            'username' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
            'password' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
        ])) {
            return redirect()->to('/login')->withInput();
        }

        $username = $this->request->getVar('username');
        $password = md5($this->request->getVar('password'));

        $cekLogin = $this->AdminsModel->getAdmin($username, $password);
        if (empty($cekLogin)) {
            $cekLoginUser = $this->UsersModel->getUser($username, $password);
            if (empty($cekLoginUser)) {
                session()->setFlashdata('gagal', 'Password atau Username salah');
                return redirect()->to('/login');
            } else {
                $data_session = array(
                    'nama' => $cekLoginUser['nama'],
                    'username' => $cekLoginUser['username'],
                    'stat' => "login-user"
                );
                session()->set($data_session);

                return redirect()->to('/');
            }
        } else {
            $data_session = array(
                'nama' => $cekLogin['nama'],
                'username' => $cekLogin['username'],
                'stat' => "login-admin"
            );
            session()->set($data_session);

            return redirect()->to('/admin-madu');
        }

        return redirect()->to('/admin-madu');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }
}
