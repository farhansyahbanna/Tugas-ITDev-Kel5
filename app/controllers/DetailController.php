<?php

class DetailController extends Controller {
    private $productModel;

    public function __construct()
    {
        $this->productModel = new ProductModel();
    }

    public function index()
    {
        $products = $this->productModel->getAll();

        $this->view('detail/index', ['products' => $products]);
    }
}
