{include file="header.tpl"}
<h1>Tabla de categorias:</h1>
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
        {foreach from=$category item=$categoria}
            <tr>
                <td>{$categoria->nombre}</td>
                <td><a href="category/{$categoria->id_categoria}">Ver productos</a></td>
            {if $isAdmin}
                <td><button class="btnEditar" data-id="{$categoria->id_categoria}">EDITAR</button>
                <button class="btnBorrar" data-id="{$categoria->id_categoria}">BORRAR</button></td>
            </tr>
            {/if}
        {/foreach}
        </tbody>
</table>
{if $isAdmin}
    <script type="text/javascript" src="js/categories.js"></script>
{/if}
{include file="footer.tpl"}        