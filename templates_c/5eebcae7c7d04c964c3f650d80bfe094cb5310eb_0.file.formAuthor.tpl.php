<?php
/* Smarty version 4.2.1, created on 2022-10-09 23:10:50
  from 'C:\xampp\htdocs\web2\TPE\templates\formAuthor.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634338da1f2812_38910700',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5eebcae7c7d04c964c3f650d80bfe094cb5310eb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE\\templates\\formAuthor.tpl',
      1 => 1665287450,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634338da1f2812_38910700 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="addAuthor" method="POST" class="my-4">
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="name">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nacionalidad</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="nationality">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Año de Nacimiento</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="birthdate">
    </div>
    <button type="submit" class="btn btn-primary mt-2">Guardar</button>
</form><?php }
}
