<?php
/* Smarty version 4.2.1, created on 2022-10-09 22:13:31
  from 'C:\xampp\htdocs\web2\TPE\templates\formBook.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63432b6becfac1_86690897',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e278cb2f183df94a98fca417cffddd7a741a925f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE\\templates\\formBook.tpl',
      1 => 1665346050,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63432b6becfac1_86690897 (Smarty_Internal_Template $_smarty_tpl) {
?>    <div class="mb-3">
        <label for="titulo" class="form-label">Titulo</label>
        <input type="text" class="form-control"  name="titulo">
    </div>
    <div class="mb-3">
        <label for="genero" class="form-label">Genero</label>
        <input type="text" class="form-control"  name="genero">
    </div>
    <button type="submit" class="btn btn-primary mt-2">Guardar</button>
</form><?php }
}
