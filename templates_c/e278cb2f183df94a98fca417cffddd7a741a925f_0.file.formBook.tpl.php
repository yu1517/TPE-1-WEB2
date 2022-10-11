<?php
/* Smarty version 4.2.1, created on 2022-10-11 02:26:55
  from 'C:\xampp\htdocs\web2\TPE\templates\formBook.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6344b84fa71970_86266662',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e278cb2f183df94a98fca417cffddd7a741a925f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE\\templates\\formBook.tpl',
      1 => 1665447869,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6344b84fa71970_86266662 (Smarty_Internal_Template $_smarty_tpl) {
?>    <div class="mb-3">
        <label for="titulo" class="form-label">Titulo</label>
        <input type="text" class="form-control"  name="titulo">
    </div>
    <div class="mb-3">
        <label for="genero" class="form-label">Genero</label>
        <input type="text" class="form-control"  name="genero">
    </div>
    <div class="mb-3">
    <input type="file" class="form-control" name="input_name" id="imageToUpload">
    <button type="submit" class="btn btn-primary mt-2">Guardar</button>
</form><?php }
}
