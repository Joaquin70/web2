<?php
require_once "model/productModel.php";
require_once "view/productView.php";

class ProductController{
    private $model;
    private $view;

    public function __construct() {
    $this->model = new ProductModel();
    $this->view = new ProductView();
    }
   
    function showProducts($id_category = null){
        if($id_category == null){
            $products = $this->model->getProducts(); //products retorna el objeto productos
        }else{
            $products = $this->model->getProductsCategory($id_category);
        }
        $this->view->renderProducts($products, false);
    }

    function showProduct($id_product){
        $producto = $this->model->getProduct($id_product); //guardo en la variable el producto que me paso el Model
        $this->view->renderProduct($producto);
    }

    function showProductsAdmin($id_category = null){
        if($id_category == null){
            $products = $this->model->getProducts(); //products retorna el objeto productos
        }else{
            $products = $this->model->getProductsCategory($id_category);
        }
        $this->view->renderProductsAdmin($products, true);
    }
}