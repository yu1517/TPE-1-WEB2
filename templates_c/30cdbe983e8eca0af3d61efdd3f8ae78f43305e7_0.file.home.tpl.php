<?php
/* Smarty version 4.2.1, created on 2022-10-09 22:13:22
  from 'C:\xampp\htdocs\web2\TPE\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63432b623b57d4_27572739',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '30cdbe983e8eca0af3d61efdd3f8ae78f43305e7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE\\templates\\home.tpl',
      1 => 1665176958,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_63432b623b57d4_27572739 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

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
                <td><?php echo $_smarty_tpl->tpl_vars['book']->value->name;?>
</td>
            </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
