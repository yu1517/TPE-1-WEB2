<?php
/* Smarty version 4.2.1, created on 2022-10-09 06:12:12
  from 'C:\xampp\htdocs\web2\trabajoEspecial-main\templates\authorList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63424a1cdafc16_84476912',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '57e4a19fbd7aa178779fb67362e69e3b79d1e724' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\trabajoEspecial-main\\templates\\authorList.tpl',
      1 => 1665288703,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:formAuthor.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_63424a1cdafc16_84476912 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- lista de tareas -->
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
                <td><a href='deleteAuthor/<?php echo $_smarty_tpl->tpl_vars['author']->value->id_author;?>
' type='button' class='btn btn-danger'>Borrar</a></td>
            </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
</table>
    <?php $_smarty_tpl->_subTemplateRender("file:formAuthor.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>




<?php }
}
