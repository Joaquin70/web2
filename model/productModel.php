<?php

class ProductModel{
    private function connectToDB(){
        return new PDO('mysql:host=localhost;'.'dbname=tpe;charset=utf8', 'root','');
    }
    
    function getProducts(){
        $db = $this->connectToDB();
        $sentencia = $db->prepare( "SELECT productos.*, categorias.nombre as categoria FROM
        productos JOIN categorias ON productos.id_categoria = categorias.id_categoria");
        $sentencia->execute();
        $productos = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $productos;
    }
    
    function getProduct($idproduct){
        $db = $this->connectToDB();
        $sentencia = $db->prepare("SELECT productos.*, categorias.nombre as categoria FROM
        productos JOIN categorias ON productos.id_categoria = categorias.id_categoria WHERE id_producto=?");
        $sentencia->execute(array($idproduct));
        $producto = $sentencia->fetch(PDO::FETCH_OBJ);
        return $producto;
    }
    
    function getProductsCategory($id_categoria){
        $db = $this->connectToDB();
        $sentencia = $db->prepare( "select * from productos where id_categoria=?");
        $sentencia->execute(array($id_categoria));
        $productos = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $productos;
    }
    function addProductToDB($nombre, $descripcion, $contenido, $categoria){
        $db = $this->connectToDB();
        $sentence = $db->prepare("INSERT INTO productos(nombre, descripcion, contenido, id_categoria) VALUES(?,?,?,?)");
        $sentence->execute(array($nombre, $descripcion, $contenido, $categoria));
    }

    function updateProduct($nombre, $descripcion, $contenido, $categoria, $id_producto){
        $db = $this->connectToDB();
        $sentence = $db->prepare("UPDATE productos SET nombre=?, descripcion=?, contenido=?, id_categoria=? WHERE id_producto=?");
        $sentence->execute(array($nombre, $descripcion, $contenido, $categoria, $id_producto));
    }

    function deleteProductFromDB($id_producto){
        $db = $this->connectToDB();
        $sentence = $db->prepare("DELETE FROM `productos` WHERE id_producto=?");
        $sentence->execute(array($id_producto));
    }

}