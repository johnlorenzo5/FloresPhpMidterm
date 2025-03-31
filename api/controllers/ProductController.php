<?php

require_once "repositories\ProductRepository.php";
require_once "repositories\interface\IProductRepository.php";

class ProductController {
    private IProductRepository $productRepository;

    public function __construct() {
        $this->productRepository = new ProductRepository();
    }

    public function GetAllProduct() 
    {
        echo json_encode( $this->productRepository->getAllProduct() );
    }

    public function GetLatestPriceOfTheProduct() 
    {
        echo json_encode( $this->productRepository->getLatestPriceOfTheProduct() );
    }

    public function GetProductById($productId) 
    {
        echo json_encode($this->productRepository->GetProductById($productId));
    }

}