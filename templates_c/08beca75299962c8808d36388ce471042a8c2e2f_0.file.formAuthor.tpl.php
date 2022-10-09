<?php
/* Smarty version 4.2.1, created on 2022-10-09 05:52:13
  from 'C:\xampp\htdocs\web2\trabajoEspecial-main\templates\formAuthor.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6342456d8ae9a6_78395689',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '08beca75299962c8808d36388ce471042a8c2e2f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\trabajoEspecial-main\\templates\\formAuthor.tpl',
      1 => 1665287450,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6342456d8ae9a6_78395689 (Smarty_Internal_Template $_smarty_tpl) {
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
