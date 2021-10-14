{include file="header.tpl"}
<div class="centrado">
    <h1>Tabla de productos:</h1>
    <div>
        <form id="formProduct" method="POST">
            <input name="nombre" placeholder="Nombre">
            <input name="descripcion" placeholder="Descripción">
            <input type="number" name="contenido" placeholder="Contenido Neto (ml)">
            <input type="number" name="categoria" placeholder="Categoria">
            <input type="submit" value="Agregar">
        </form>
    </div>
    <table>
        <thead>
            <tr>
            <th>Nombre</th>
            <th>Contenido</th>
            <th>Categoria</th>
            <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
            {foreach from=$products item=$product}
                    <td>{$product->nombre}</td>
                    <td>{$product->contenido} ml.</td>
                    <td>{$product->categoria}</td>
                {if $isAdmin}
                    <td><button class="btnEditar" data-id="{$product->id_producto}">EDITAR</button>
                        <button class="btnBorrar" data-id="{$product->id_producto}">BORRAR</button></td>
            </tr>
                {else}
                <td><a href ="product/{$product->id_producto}">VER DETALLE</a></td>
            </tr>
                {/if}
            {/foreach}
        </tbody>
    </table>
    {if $isAdmin}
        <script type="text/javascript" src="js/products.js"></script>

    {/if}
</div>
{include file="footer.tpl"}
