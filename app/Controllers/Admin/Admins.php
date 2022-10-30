<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

use App\Models\Product_model;

class Admins extends BaseController
{
    protected $ProductModel;

    public function __construct()
    {
        $this->ProductModel = new Product_model();
    }

    public function index()
    {
        if (session()->get('stat') != 'login-admin') {
            if (session()->get('stat') == 'login-user') {
                return redirect()->to('/home');
            } else {
                return redirect()->to('/');
            }
        }

        $data = [
            'validation' => \Config\Services::validation()
        ];

        return view('Pages/Admin/home', $data);
    }

    public function product()
    {
        if (session()->get('stat') != 'login-admin') {
            if (session()->get('stat') == 'login-user') {
                return redirect()->to('/home');
            } else {
                return redirect()->to('/');
            }
        }

        $data = [
            'validation' => \Config\Services::validation(),
            'data_products' => $this->ProductModel->findAll()
        ];

        return view('Pages/Admin/Products/product', $data);
    }

    public function review()
    {
        if (session()->get('stat') != 'login-admin') {
            if (session()->get('stat') == 'login-user') {
                return redirect()->to('/home');
            } else {
                return redirect()->to('/');
            }
        }

        $data = [
            'validation' => \Config\Services::validation()
        ];

        return view('Pages/Admin/Review/review', $data);
    }

    public function admin()
    {
        if (session()->get('stat') != 'login-admin') {
            if (session()->get('stat') == 'login-user') {
                return redirect()->to('/home');
            } else {
                return redirect()->to('/');
            }
        }
        return view('Pages/Admin/Admin/admin');
    }
}
