<?php
class ProductView {
    function renderProducts($products, $isAdmin){
        include_once "templates/header.php";

        $html = '<div class="centrado">
        <h1>Tabla de productos:</h1>
        <table class= "">
            <thead>
                <tr>
                <th>Nombre</th>
                <th>Contenido</th>
                <th>Categoria</th>
                <th></th>
                </tr>
            </thead>
            <tbody>
            ';
            
        foreach ($products as $product) {
            $html .=
                '<tr>
                <td>'.$product->nombre.'</td>
                <td>'.$product->contenido.' ml.</td>
                <td>'.$product->categoria.'</td>';
                if($isAdmin){
                $html .='<td><button class="btnEditar" data-id="'.$product->id_producto.'">EDITAR</button>
                        <button class="btnBorrar" data-id="'.$product->id_producto.'">BORRAR</button></td>
                        </tr>';
                }else{
                $html .='<td><a href ="product/'.$product->id_producto.'">VER DETALLE</a></td>
                        </tr>';
                }
        }
        $html .= '
        </tbody>
        </thead>
        </table>
        </div>';
        if($isAdmin){
            $html .= '<script type="text/javascript" src="js/products.js"></script>';
        }
        echo $html;
        include_once "templates/footer.php";
    }

    function renderProduct($product){
        include_once "templates/header.php";
        $html = '<div class="centrado">
            <h1>Tabla de productos:</h1>
            <table class= "">
                <thead>
                    <tr>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Contenido</th>
                    <th>Categoria</th>
                    <th></th>
                    </tr>
                </thead>
                <tbody>
                ';
                $html.= '<tr><td>'.$product->nombre.'</td>
                        <td>'.$product->descripcion.'</td>
                        <td>'.$product->contenido.'</td>
                        <td>'.$product->categoria.'</td></tr>';
                $html.='
                </tbody>
            </table>
        </div>';
        include_once "templates/footer.php";
        echo $html;
    }

    function renderProductsAdmin($products, $isAdmin){
        include_once "templates/header.php";

        $html = '<div class="centrado">
        <h1>Tabla de productos:</h1>
        <table class= "">
            <thead>
                <tr>
                <th>Nombre</th>
                <th>Contenido</th>
                <th>Categoria</th>
                <th></th>
                </tr>
            </thead>
            <tbody>
            ';
            
            foreach($products as $product) { 
                $html.= '<tr><td>'.$product->nombre.'</td>
                <td>'.$product->contenido.'</td>
                <td>'.$product->categoria.'</td><td>';
                if($isAdmin){
                    $html.='<a class=btn-editar data-id='.$product->id_producto.'>EDITAR</a>
                            <a class=btn-borrar data-id='.$product->id_producto.'>BORRAR</a>
                            </td>';
                }else{
                    $html.='<a>Ver detalles</a></td>';
                }
            }
            '</tr>';
            $html.='
            </tbody>
        </table>';
        $html.= '<script type=text/javascript src=js/products.js></script>';
    '</div>';
        include_once "templates/footer.php";
    echo $html;
    }

}