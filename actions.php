<?php
require_once "dp.php";
require_once "controller/productController.php";
require_once "controller/categoryController.php";

function showHome(){
    include_once "templates/header.php";
    
    include_once "templates/footer.php";
    
}

function showProducts($id_category = null){
    $productController = new ProductController();
    $productController->showProducts($id_category = null);
}

function showCategories(){
    $categoryController = new CategoryController();
    $categoryController->showCategories();
}

function showProduct($id_product){
    $productController = new ProductController();
    $productController->showProduct($id_product);
}

function showAdminProducts(){
    $productController = new ProductController();
    $productController->showProductsAdmin();
}

function showAdminCategory(){
    $categoryController = new CategoryController();
    $categoryController->showCategoriesAdmin();
}

function deleteCategory($id_category){
    $categoryController = new CategoryController();
    $categoryController->deleteCategory($id_category);
}

function addCategory($nombre){
    $categoryController = new CategoryController();
    $categoryController->addCategory($nombre);
}

function editCategory($id, $nombre){
    $categoryController = new CategoryController();
    $categoryController->editCategory($id, $nombre);
}