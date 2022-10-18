<?php
/* Smarty version 4.2.1, created on 2022-10-18 02:34:17
  from 'C:\xampp\htdocs\web2\TPE\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634df4899eca40_58482212',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '965710785cc9ef594df960c0c299835164faf048' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE\\templates\\header.tpl',
      1 => 1666053254,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634df4899eca40_58482212 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
    <base href="<?php echo BASE_URL;?>
">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href="app/views/css/styles.css" rel="stylesheet">
    <title>LIBROS</title>
</head>

<body>
    <header>
        <img src="imgs/portada1.jpg" class="imgNav">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark navbarStyle">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarColor01">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="book">Libros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="author">Autores</a>
                        </li>
                    </ul>
                <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"aria-expanded="false">Categoria</a>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['authors']->value, 'author');
$_smarty_tpl->tpl_vars['author']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['author']->value) {
$_smarty_tpl->tpl_vars['author']->do_else = false;
?>
                                    <li><a class="dropdown-item" href="filter/<?php echo $_smarty_tpl->tpl_vars['author']->value->id_author;?>
"><?php echo $_smarty_tpl->tpl_vars['author']->value->name;?>
</a></li>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </ul>
                        </li>
                    </ul>
                    <?php if (!(isset($_SESSION['USER_ID']))) {?>
                        <a href="login"><button class="btn btn-outline-light btnlogin" type="button">Login</button></a>
                    <?php } else { ?>
                        <a href="logout"><button class="btn btn-outline-light btnlogin" type="button">Logout</button></a>
                        <span>
                            <p class="user-select-none userSession">User: <?php echo $_SESSION['USER_EMAIL'];?>
</p>
                        </span>
                    <?php }?>
                </div>
                </div>
            </div>
        </nav>
</header><?php }
}
