<?php
require_once './libs/smarty-4.2.1/libs/Smarty.class.php';

class HomeView{
    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty(); //inicializo smarty
    }

    function showHome($books) {
        //asigno variables al tpl smarty
        $this->smarty->assign('count', count($books));
        $this->smarty->assign('books', $books);

        //mostrar el tpl
        $this->smarty->display('home.tpl');
    }
}