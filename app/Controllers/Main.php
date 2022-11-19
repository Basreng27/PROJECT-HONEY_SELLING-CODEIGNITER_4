<?php

namespace App\Controllers;

use App\Models\Product_model;
use App\Models\Review_model;
use App\Models\Set_dashboard_model;

class Main extends BaseController
{
    protected $ProductModel;
    protected $ReviewModel;
    protected $Set_dashboardModel;

    public function __construct()
    {
        $this->ProductModel = new Product_model();
        $this->ReviewModel = new Review_model();
        $this->Set_dashboardModel = new Set_dashboard_model();
    }

    public function index()
    {
        $data = [
            'data_reviews' => $this->ReviewModel->findAll(),
            'set' => $this->Set_dashboardModel->find(1)
        ];

        return view('Pages/User/home', $data);
    }

    public function product()
    {
        $data = [
            'data_products' => $this->ProductModel->findAll(),
            'set' => $this->Set_dashboardModel->find(1)
        ];

        return view('Pages/User/product', $data);
    }
}
