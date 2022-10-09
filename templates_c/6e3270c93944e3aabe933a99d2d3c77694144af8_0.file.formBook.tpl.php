<?php
/* Smarty version 4.2.1, created on 2022-10-07 23:45:06
  from 'C:\xampp\htdocs\web2\trabajoEspecial-main\templates\formBook.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63409de275e7b5_63014385',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6e3270c93944e3aabe933a99d2d3c77694144af8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\trabajoEspecial-main\\templates\\formBook.tpl',
      1 => 1665179094,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63409de275e7b5_63014385 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="add" method="POST" class="my-4">
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">selector nombre de tabla 2</label>
        <select name="priority" class="form-control" id="exampleFormControlInput1">
        <option value="1">1</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Titulo</label>
        <input type="text" class="form-control" id="exampleFormControlInput1">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Genero</label>
        <input type="text" class="form-control" id="exampleFormControlInput1">
    </div>
    <button type="submit" class="btn btn-primary mt-2">Guardar</button>
</form><?php }
}
