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
                <td><a href='delete/{$book->id}' type='button' class='btn btn-danger'>Borrar</a></td>
            </tr>
        {/foreach}
    </tbody>
</table>
<form action="addBook" method="POST" class="my-4">
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">selector nombre de tabla 2</label>
        <select name="priority" class="form-control" id="exampleFormControlInput1">
        {foreach from =}
        <option value="1">1</option>
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