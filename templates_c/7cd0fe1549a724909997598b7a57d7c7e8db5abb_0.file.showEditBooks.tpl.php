<?php
/* Smarty version 4.2.1, created on 2022-10-10 20:19:26
  from 'C:\xampp\htdocs\web2\TPE\templates\showEditBooks.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6344622ebedbd2_31469479',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7cd0fe1549a724909997598b7a57d7c7e8db5abb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE\\templates\\showEditBooks.tpl',
      1 => 1665425952,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6344622ebedbd2_31469479 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- lista de tareas -->
<table class="table table-hover">

    <thead>
        <tr>
            <th scope="col">Titulo</th>
            <th scope="col">Genero</th>
            <th scope="col"></th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['books']->value, 'book');
$_smarty_tpl->tpl_vars['book']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['book']->value) {
$_smarty_tpl->tpl_vars['book']->do_else = false;
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['book']->value->title;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['book']->value->genre;?>
</td>
                <td><a href='deleteBook/<?php echo $_smarty_tpl->tpl_vars['book']->value->id;?>
' type='button' class='btn btn-danger'>Borrar</a></td>
                <td><a href='showEdit/<?php echo $_smarty_tpl->tpl_vars['book']->value->id;?>
' type='button' class='btn btn-danger ml-auto'>Editar</a></td>
            </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
</table>

<h1>EDITAR</h1>

<form action="editBook/<?php echo $_smarty_tpl->tpl_vars['book']->value->id;?>
" method="POST" class="my-4">
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Seleccione una opcion</label>
        <select name="id_author" class="form-control">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['authors']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['item']->value->id_author;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value->name;?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
    </div>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['books']->value, 'book');
$_smarty_tpl->tpl_vars['book']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['book']->value) {
$_smarty_tpl->tpl_vars['book']->do_else = false;
?>   
    <div class="mb-3">
        <label for="titulo" class="form-label">Titulo</label>
<input type="text" class="form-control" name="titulo" value="<?php echo $_smarty_tpl->tpl_vars['book']->value->title;?>
">
    </div>
    <div class="mb-3">
        <label for="genero" class="form-label">Genero</label>
<input type="text" class="form-control" name="genero" value="<?php echo $_smarty_tpl->tpl_vars['book']->value->genre;?>
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
