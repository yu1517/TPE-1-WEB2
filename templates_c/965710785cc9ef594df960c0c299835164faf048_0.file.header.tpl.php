<?php
/* Smarty version 4.2.1, created on 2022-10-14 03:59:39
  from 'C:\xampp\htdocs\web2\TPE\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6348c28b7af094_49577158',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '965710785cc9ef594df960c0c299835164faf048' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE\\templates\\header.tpl',
      1 => 1665712041,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6348c28b7af094_49577158 (Smarty_Internal_Template $_smarty_tpl) {
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
    <link rel="stylesheet" href="css/style.css">
    <title>LIBROS</title>
</head>

<body>
    <header>
        <img src="imgs/portada1.jpg" style="width: 100%; height: 18rem; object-fit:cover;">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark" Style="margin-bottom: 2rem;">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarColor01">
                    <!--<img src="images/logo22.png" style="width: 3.5rem;">-->
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="home">Home</a>
                        </li>
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
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Categoria</a>
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
                </div>
                    <?php if (!(isset($_SESSION['USER_ID']))) {?>
                        <a href="login"><button class="btn btn-outline-light" type="button"
                                style="margin: 0 1rem;">Login</button></a>
                    <?php } else { ?>
                        <a href="logout"><button class="btn btn-outline-light" type="button"
                                style="margin: 0 1rem;">Logout</button></a>
                        <span>
                            <p style="color:#777777">User: <?php echo $_SESSION['USER_EMAIL'];?>
</p>
                        </span>
                    <?php }?>
                </div>
            </div>
        </nav>
</header>

    <!-- inicio main container -->
<main class="container"><?php }
}
