<?php
/* Smarty version 4.2.1, created on 2022-10-17 20:28:42
  from 'C:\xampp\htdocs\web2\TPE\templates\formBook.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634d9eda8fa7d1_09260820',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e278cb2f183df94a98fca417cffddd7a741a925f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE\\templates\\formBook.tpl',
      1 => 1666031222,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634d9eda8fa7d1_09260820 (Smarty_Internal_Template $_smarty_tpl) {
?><h1>Add Form</h1>
    <form action="addBook" method="POST" class="my-4" enctype="multipart/form-data">
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
        <div class="mb-3">
            <label for="titulo" class="form-label">Titulo</label>
            <input type="text" class="form-control"  name="titulo">
        </div>
        <div class="mb-3">
            <label for="genero" class="form-label">Genero</label>
            <input type="text" class="form-control"  name="genero">
        </div>
        <div class="mb-3">
        <input type="file" class="form-control" name="input_name" id="imageToUpload">
        </div>
        <button type="submit" class="btn btn-primary mt-2">Guardar</button>
    </form><?php }
}
