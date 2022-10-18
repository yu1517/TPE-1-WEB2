<?php
/* Smarty version 4.2.1, created on 2022-10-17 23:07:48
  from 'C:\xampp\htdocs\web2\TPE\templates\bookList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634dc424e3af20_14933611',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fb24b62be0fd7fa2d233eee2675e1abcaef5bb7f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE\\templates\\bookList.tpl',
      1 => 1666040616,
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
function content_634dc424e3af20_14933611 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">Titulo</th>
            <th scope="col">Genero</th>
            <th scope="col">Autor</th>
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
                <td><a href="detail/<?php echo $_smarty_tpl->tpl_vars['book']->value->id_author;?>
" class="text-dark"><?php echo $_smarty_tpl->tpl_vars['book']->value->title;?>
</a></td>
                <td><?php echo $_smarty_tpl->tpl_vars['book']->value->genre;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['book']->value->name;?>
</td>
                <td><?php if ((isset($_smarty_tpl->tpl_vars['book']->value->imagen))) {?>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['book']->value->imagen;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['book']->value->title;?>
" class="imgBookList"/>
                    <?php }?>
                </td>
                <?php if ((isset($_SESSION['USER_ID']))) {?>
                <td><a href='showEdit/<?php echo $_smarty_tpl->tpl_vars['book']->value->id;?>
' type='button' class='btn btn-danger ml-auto'>Editar</a></td>
                <td><a href='deleteBook/<?php echo $_smarty_tpl->tpl_vars['book']->value->id;?>
' type='button' class='btn btn-danger'>Borrar</a></td>
                <?php ob_start();
}
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>

            </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
</table>

<?php if ((isset($_SESSION['USER_ID']))) {
$_smarty_tpl->_subTemplateRender("file:formBook.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
ob_start();
}
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>








<?php }
}
