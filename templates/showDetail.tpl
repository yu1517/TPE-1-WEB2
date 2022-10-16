{include file="header.tpl"}
{foreach from=$detail item=$item}
<div class="card mb-3" style="max-width: 540px;">
    <div class="row g-0">
        <div class="col-md-4">
        <img src="{$item->img}" class="img-fluid rounded-start" alt="{$item->name}">
            {$item->name}
        </div>
        <div class="col-md-8">
            <div class="card-body">                
                    <h5 class="card-title">{$item->name}</h5>
                    <p class="card-text">Nacionalidad: {$item->nationality}</p>
                    <p class="card-text">Año de Nacimiento: {$item->birthdate}</p>
            </div>
            <a href="book" class="btn btn-primary">Volver</a>
        </div>
    </div>
</div>
{/foreach}
{include file="footer.tpl"}