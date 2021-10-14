{include file="header.tpl"}
<div class="centrado">
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
                
                <tr>
                    <td>{$product->nombre}</td>
                    <td>{$product->descripcion}</td>
                    <td>{$product->contenido}</td>
                    <td>{$product->categoria}</td>
                </tr>
                
                </tbody>
            </table>
</div>
{include file="footer.tpl"}
