<?php
class CategoryView{
    function showCategories($category, $isAdmin){
        include_once "templates/header.php";
        $html = '<h1>Tabla de categorias:</h1>
        <p>Agregar categoria:</p>
        <form id="form" method="GET">
            <input type="text" id="nombre" name="nombre" placeholder="nombre de categoria">
            <input type="submit" id="btnAgregar" value="Agregar">
        </form>
        <table class= "">
                <thead>
                    <tr>
                    <th>Nombre</th>
                    <th></th>
                    </tr>
                </thead>
                <tbody>
                ';
                //$category = getCategories(); //products retorna el objeto producto
                foreach($category as $categoria){
                    $html.= '<tr>
                                <td>'.$categoria->nombre.'</td>
                                <td><a href="category/'.$categoria->id_categoria.'">Ver productos</a></td>';
                    if($isAdmin){
                        $html .='<td><button class="btnEditar" data-id="'.$categoria->id_categoria.'">EDITAR</button>
                                <button class="btnBorrar" data-id="'.$categoria->id_categoria.'">BORRAR</button></td>
                                </tr>';
                        }
                };
                $html.='
                </tbody>
                </table>';
            if($isAdmin){
                $html .= '<script type="text/javascript" src="js/categories.js"></script>';
            }
            echo $html;
        include_once "templates/footer.php";
    }
}