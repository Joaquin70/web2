<?php
require_once "controller/productController.php";
require_once "controller/categoryController.php";

function showHome(){
    include_once "templates/header.php";
    
    include_once "templates/footer.php";
    
}

function showProducts(){
    $productController = new ProductController();
    $productController->showProducts();
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

function deleteProduct($id){
    $productController = new ProductController();
    $productController->deleteProduct($id);
}

function addProduct($nombre, $descripcion, $contenido, $categoria){
    $productController = new ProductController();
    $productController->addProduct($nombre, $descripcion, $contenido, $categoria);
}

function updateProduct($nombre, $descripcion, $contenido, $categoria, $id_producto){
    $productController = new ProductController();
    $productController->updateProduct($nombre, $descripcion, $contenido, $categoria, $id_producto);
}

function Category($id_category){
    $categoryController = new CategoryController();
    $categoryController->getCategory($id_category);
}


