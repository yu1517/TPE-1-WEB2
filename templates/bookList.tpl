{include file="header.tpl"}

<!-- lista de tareas -->
<table class="table table-hover">

    <thead>
        <tr>
            <th scope="col">Titulo</th>
            <th scope="col">Genero</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        {foreach from=$books item=$book}
            <tr>
                <td>{$book->title}</td>
                <td>{$book->genre}</td>
                <td>{if isset($book->imagen)}
                    <img src="{$book->imagen}" style="width:25px;"/>
                {/if}
                </td>
                <td><a href='showEdit/{$book->id}' type='button' class='btn btn-danger ml-auto'>Editar</a></td>
                <td><a href='deleteBook/{$book->id}' type='button' class='btn btn-danger'>Borrar</a></td>
            </tr>
        {/foreach}

    </tbody>
</table>

<form action="addBook" method="POST" class="my-4" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Seleccione una opcion</label>
        <select name="id_author" class="form-control">
        {foreach from =$authors item=$item}
            <option value="{$item->id_author}">{$item->name}</option>
        {/foreach}
        </select>
    </div> 
{include file="formBook.tpl"}
{include file="footer.tpl"}








{*
{include file="header.tpl"}

<!-- lista de tareas -->
<ul class="list-group">
    {foreach from=$books item=$book}
        <li class='list-group-item d-flex justify-content-between align-items-center'>
            <span> <b>{$book->title}</b> - {$book->genre} - {$book->name}</span>
            <div class="ml-auto">                
                <a href='delete/{$book->id}' type='button' class='btn btn-danger'>Borrar</a>
            </div>
        </li>
    {/foreach}
</ul>

<p class="mt-3"><small>Mostrando {$count} Libros</small></p>

{include file="footer.tpl"}
*}