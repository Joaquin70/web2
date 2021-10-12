<?php
class CategoryModel{
    function connectToDB(){
        return new PDO('mysql:host=localhost;'.'dbname=tpe;charset=utf8', 'root','');
    }
    
    function getCategories(){
        $db = connectToDB();
        $sentencia = $db->prepare( "select * from categorias");
        $sentencia->execute();
        $categorias = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $categorias;
    }

    function deleteCategory($id_category){
        $db = connectToDB();
        $sentencia = $db->prepare( "DELETE FROM categorias WHERE id_categoria=?");
        $sentencia->execute(array($id_category));
    }

    function addCategory($nombre){
        $db = connectToDB();
        $sentencia = $db->prepare("INSERT INTO categorias(nombre) VALUES (?)");
        $sentencia->execute(array($nombre));
    }

    function editCategory($id_category, $nombre){
        $db = connectToDB();
        $sentencia = $db->prepare("UPDATE categorias SET nombre=? WHERE id_categoria=?");
        $sentencia->execute(array($nombre, $id_category));
    }
}