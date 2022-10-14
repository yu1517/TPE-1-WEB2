{include file="header.tpl"}

<!--Contenido-->
<table class="table table-hover">

    <thead>
        <tr>
            <th scope="col">Titulo</th>
            <th scope="col">Genero</th>
            <th scope="col">Autor</th>
        </tr>
    </thead>
    <tbody>
        {foreach from=$books item=$book}
            <tr>
                <td>{$book->title}</td>
                <td>{$book->genre}</td>
                <td>{$book->name}</td>
            </tr>
        {/foreach}
    </tbody>
</table>
{include file="footer.tpl"}