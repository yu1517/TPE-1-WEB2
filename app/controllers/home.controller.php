<?php
require_once 'app/models/home.model.php';
require_once 'app/views/home.view.php';

class HomeController{
    private $model;
    private $view;
    private $modelAuthor;
    
    function __construct(){
        $this->model = new HomeModel();
        $this->modelAuthor = new AuthorModel();
        $this->view = new HomeView();
    }

    function showHome(){
        $books = $this->model->getAllBooksHome();
        $authors = $this->modelAuthor->getAllAuthors();
        $this->view->showHome($books, $authors);
    }

    public function filterCategory($id){
        $name = $this->modelAuthor->getNameById($id);
        $filters = $this->model->getFilter($id);
        $authors = $this->modelAuthor->getAllAuthors();
        $this->view->showFilter($filters, $name, $authors);
    }
}