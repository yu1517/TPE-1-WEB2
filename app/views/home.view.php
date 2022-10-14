<?php
require_once './libs/smarty-4.2.1/libs/Smarty.class.php';

class HomeView{
    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty(); //inicializo smarty
    }

    function showHome($books, $authors) {
        //asigno variables al tpl smarty
        $this->smarty->assign('authors', $authors);
        $this->smarty->assign('books', $books);

        //mostrar el tpl
        $this->smarty->display('home.tpl');
    }
    
    function showFilter($filters, $name, $authors){
        $this->smarty->assign('name', $name); 
        $this->smarty->assign('filters', $filters);
        $this->smarty->assign('authors', $authors);
        $this->smarty->display('filterView.tpl');
    }
}