<?php

namespace App\Controllers;

use App\Models\Product_model;
use App\Models\Review_model;
use App\Models\Set_dashboard_model;
use App\Models\Rating_model;
use App\Models\Checkout_model;

class Main extends BaseController
{
    protected $ProductModel;
    protected $ReviewModel;
    protected $Set_dashboardModel;
    protected $RatingModel;
    protected $CheckoutModel;

    public function __construct()
    {
        $this->ProductModel = new Product_model();
        $this->ReviewModel = new Review_model();
        $this->Set_dashboardModel = new Set_dashboard_model();
        $this->RatingModel = new Rating_model();
        $this->CheckoutModel = new Checkout_model();
    }

    public function index()
    {
        $data = [
            'data_reviews' => $this->ReviewModel->findAll(),
            'best_product' => $this->RatingModel->bestProduct(),
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
