<?php
/* Smarty version 4.2.1, created on 2022-10-10 20:52:48
  from 'C:\xampp\htdocs\web2\TPE\templates\showEditAuthor.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63446a00aca733_06284376',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '17e5c64bd7667e897e292e47abc9a4ce8025b6da' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE\\templates\\showEditAuthor.tpl',
      1 => 1665427965,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_63446a00aca733_06284376 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<table class="table table-hover">

    <thead>
        <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Nacionalidad</th>
            <th scope="col">Año de Nacimiento</th>
        </tr>
    </thead>
    <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['authors']->value, 'author');
$_smarty_tpl->tpl_vars['author']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['author']->value) {
$_smarty_tpl->tpl_vars['author']->do_else = false;
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['author']->value->name;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['author']->value->nationality;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['author']->value->birthdate;?>
</td>
            </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
</table>

<h1>Edit Form</h1>
<form action="editAuthor/<?php echo $_smarty_tpl->tpl_vars['author']->value->id_author;?>
" method="POST" class="my-4">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['authors']->value, 'author');
$_smarty_tpl->tpl_vars['author']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['author']->value) {
$_smarty_tpl->tpl_vars['author']->do_else = false;
?>
        <div class="mb-3">
            <label for="beer_name" class="form-label">Nombre</label>
            <input type="text" class="form-control" name="name" value="<?php echo $_smarty_tpl->tpl_vars['author']->value->name;?>
">
        </div>
        <div class="mb-3">
            <label for="abv" class="form-label">Nacionalidad</label>
            <input type="text" class="form-control" name="nationality" value="<?php echo $_smarty_tpl->tpl_vars['author']->value->nationality;?>
">
        </div>
        <div class="mb-3">
            <label for="ibu" class="form-label">Año de Nacimiento</label>
            <input type="text" class="form-control" name="birthdate" value="<?php echo $_smarty_tpl->tpl_vars['author']->value->birthdate;?>
">
        </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <button type="submit" class="btn btn-primary mt-2">Editar</button>
</form>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
