<?php

require_once "libs/smarty/Smarty.class.php";

class CategoryView{
    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();
    }

    function showCategories($category, $isAdmin){
        $this->smarty->assign('category', $category);
        $this->smarty->assign('isAdmin', $isAdmin);
        $this->smarty->display('templates/category.tpl');
    }

    function showCategory($category){
        $this->smarty->assign('category', $category);
        $this->smarty->display('templates/editCategory.tpl');
    }
    
}