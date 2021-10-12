<?php

require_once "actions.php";

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');


// lee la acción
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home'; // acción por defecto si no envían
}

$params = explode('/', $action);

// determina que camino seguir según la acción
switch ($params[0]) {
    case 'home': 
        showHome(); 
        break;
    case 'products':
        showProducts();
        break;
    case 'product':
        showProduct($params[1]);
        break;
    case 'categories':
        showCategories();
        break;
    case 'category':
        showProducts($params[1]);
        break;
    case 'admin':
        switch ($params[1]) {
            case 'products':
                showAdminProducts();
                break;
            case 'categories':
                showAdminCategory();
                break;
            case 'deleteCategory':
                deleteCategory($params[2]);
                break;
            case 'addCategory':
                addCategory($params[2]);
                break;
            case 'editCategory':
                editCategory($params[2], $params[3]);
                break;
            default:
                break;
        }
        break;
    
    default:
        echo('404 Page not found'); 
        break;
}
