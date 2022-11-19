<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

use App\Models\Product_model;
use App\Models\Review_model;
use App\Models\No_wa_model;
use App\Models\Checkout_model;
use App\Models\Set_dashboard_model;

class Admins extends BaseController
{
    protected $ProductModel;
    protected $ReviewModel;
    protected $No_waModel;
    protected $CheckoutModel;
    protected $Set_dashboardModel;

    public function __construct()
    {
        $this->ProductModel = new Product_model();
        $this->ReviewModel = new Review_model();
        $this->No_waModel = new No_wa_model();
        $this->CheckoutModel = new Checkout_model();
        $this->Set_dashboardModel = new Set_dashboard_model();
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
            'validation' => \Config\Services::validation(),
            'set' => $this->Set_dashboardModel->find(1)
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
            'data_products' => $this->ProductModel->findAll(),
            'set' => $this->Set_dashboardModel->find(1)
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
            'validation' => \Config\Services::validation(),
            'data_reviews' => $this->ReviewModel->findAll(),
            'set' => $this->Set_dashboardModel->find(1)
        ];

        return view('Pages/Admin/Review/review', $data);
    }

    // public function admin()
    // {
    //     if (session()->get('stat') != 'login-admin') {
    //         if (session()->get('stat') == 'login-user') {
    //             return redirect()->to('/home');
    //         } else {
    //             return redirect()->to('/');
    //         }
    //     }

    //     return view('Pages/Admin/Admin/admin');
    // }

    public function nomor()
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
            'data_nomor' => $this->No_waModel->findAll(),
            'set' => $this->Set_dashboardModel->find(1)
        ];

        return view('Pages/Admin/Nomor/no_admin', $data);
    }

    public function setDashboard()
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
            'data_set_dashboard' => $this->Set_dashboardModel->findAll(),
            'set' => $this->Set_dashboardModel->find(1)
        ];

        return view('Pages/Admin/Setting/set_dashboard', $data);
    }

    public function pesanan()
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
            'data_checkout' => $this->CheckoutModel->getCheckout(),
            'set' => $this->Set_dashboardModel->find(1)
        ];

        return view('Pages/Admin/Pesanan/pesanan', $data);
    }
}
