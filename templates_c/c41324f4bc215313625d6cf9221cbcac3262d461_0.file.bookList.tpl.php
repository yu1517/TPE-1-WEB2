<?php
/* Smarty version 4.2.1, created on 2022-10-07 23:32:21
  from 'C:\xampp\htdocs\web2\trabajoEspecial-main\templates\bookList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63409ae5852916_47508179',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c41324f4bc215313625d6cf9221cbcac3262d461' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\trabajoEspecial-main\\templates\\bookList.tpl',
      1 => 1665178338,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:formBook.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_63409ae5852916_47508179 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

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
                <td><a href='delete/<?php echo $_smarty_tpl->tpl_vars['book']->value->id;?>
' type='button' class='btn btn-danger'>Borrar</a></td>
            </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
</table> 
<?php $_smarty_tpl->_subTemplateRender("file:formBook.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>








<?php }
}
