{include file="header.tpl"}

<h1>Editar Categoria</h2>
<p>{$category->nombre}</p>
    <form id="formEdit" method="GET">
        <input type="text" id="nombre" name="nombre" value="{$category->nombre}">
        <input type="submit" data-id="btnEditar" value="Editar">
    </form>
    <script type="text/javascript" src="js/category.js"></script>
{include file="footer.tpl"}