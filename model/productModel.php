<?php

class ProductModel{
    function connectToDB(){
        return new PDO('mysql:host=localhost;'.'dbname=tpe;charset=utf8', 'root','');
    }
    
    function getProducts(){
        $db = connectToDB();
        $sentencia = $db->prepare( "SELECT productos.*, categorias.nombre as categoria FROM
        productos JOIN categorias ON productos.id_categoria = categorias.id_categoria");
        $sentencia->execute();
        $productos = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $productos;
    }
    
    function getProduct($idproduct){
        $db = connectToDB();
        $sentencia = $db->prepare("SELECT productos.*, categorias.nombre as categoria FROM
        productos JOIN categorias ON productos.id_categoria = categorias.id_categoria WHERE id_producto=?");
        $sentencia->execute(array($idproduct));
        $producto = $sentencia->fetch(PDO::FETCH_OBJ);
        return $producto;
    }
    
    function getProductsCategory($id_categoria){
        $db = connectToDB();
        $sentencia = $db->prepare( "select * from productos where id_categoria=?");
        $sentencia->execute(array($id_categoria));
        $productos = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $productos;
    }
}