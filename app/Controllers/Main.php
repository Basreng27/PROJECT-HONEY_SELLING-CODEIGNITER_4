<?php

namespace App\Controllers;

use App\Models\Product_model;
use App\Models\Review_model;

class Main extends BaseController
{
    protected $ProductModel;
    protected $ReviewModel;

    public function __construct()
    {
        $this->ProductModel = new Product_model();
        $this->ReviewModel = new Review_model();
    }

    public function index()
    {
        $data = [
            'data_reviews' => $this->ReviewModel->findAll()
        ];

        return view('Pages/User/home', $data);
    }

    public function product()
    {
        $data = [
            'data_products' => $this->ProductModel->findAll()
        ];

        return view('Pages/User/product', $data);
    }
}
