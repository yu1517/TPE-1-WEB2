<?php
require_once 'app/models/book.model.php';
require_once 'app/views/book.view.php';


class BookController{

    private $model;
    private $view;

    function __construct(){
        //instancio el modelo y la vista 
        $this->model = new BookModel();
        $this->view = new BookView();
    }

    //Imprime la lista de tareas 
    function showBooks(){
        //obtiene las tareas del modelo
        $books = $this->model->getAllBooks();

        //actualizo la vista
        $this->view->showBooks($books);
    }

    function addBook() {
        // TODO: validar entrada de datos

        $title = $_POST['title'];
        $genre = $_POST['genre'];

        $id = $this->model->insertBook($title, $genre);

        header("Location: " . BASE_URL); 
    }

    function deleteBooks($id) {
        $this->model->deleteBookById($id);
        header("Location: " . BASE_URL);
    }
}