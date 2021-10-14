<?php

require_once "libs/smarty/Smarty.class.php";

class ProductView {
    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();
    }

    function renderProducts($products, $isAdmin){
        $this->smarty->assign('products', $products);
        $this->smarty->assign('isAdmin', $isAdmin);
        $this->smarty->display('templates/products.tpl');
    }

    function renderProduct($product){
        $this->smarty->assign('product', $product);
        $this->smarty->display('templates/product.tpl');
    }
}