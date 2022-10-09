<?php
require_once 'app/models/author.model.php';
require_once 'app/views/author.view.php';

class AuthorController{
    private $model;
    private $view;

    function __construct(){
        //intancion el modelo y la vista de la lista author
        $this->model = new AuthorModel();
        $this->view = new AuthorView();
    }

    function showAuthor(){
        //obtiene las tareas del modelo
        $authors = $this->model->getAllAuthors();
        //actualizo la vista
        $this->view->showAuthors($authors);
    }

    function addAuthor() {   
    $name = $_POST['name'];
    $nationality = $_POST['nationality'];
    $birthdate = $_POST['birthdate'];
    $id = $this->model->insertAuthor($name, $nationality, $birthdate);

    header("Location: " . BASE_URL . 'author'); 
    }

    function deleteAuthor($id) {
        $this->model->deleteAuthorById($id);
    }
}