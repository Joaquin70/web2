<?php
require_once "model/categoryModel.php";
require_once "view/categoryView.php";

class CategoryController{
    private $model;
    private $view;

    public function __construct() {
        $this->model = new CategoryModel();
        $this->view = new CategoryView();
    }

    function showCategories(){
        $category = $this->model->getCategories();
        $this->view->showCategories($category, false);
    }

    function showCategoriesAdmin(){
        $categories = $this->model->getCategories(); //guardo en $categories lo que traigo del model
        $this->view->showCategories($categories, true); //uso el objeto traido del model
    }

    function deleteCategory($id_category){
        $this->model->deleteCategory($id_category);
        //VER QUE NO SE BORRA EN LA VISTA
    }

    function addCategory($nombre){
        $this->model->addCategory($nombre);

    }

    function editCategory($id, $nombre){
        $this->model->editCategory($id, $nombre);
    }

    function getCategory($id_category){
        $category = $this->model->getCategory($id_category);
        $this->view->showCategory($category);
        
    }
}