<?php
require_once './app/models/book.model.php';
require_once './app/views/book.view.php';
require_once './app/helper/auth.helper.php';



class BookController{

    private $model;
    private $view;
    private $modelAuthor;//voy a poder vincular el modelos de las dos tablas 
    

    function __construct(){
        //instancio el modelo y la vista 
        $this->model = new BookModel();
        $this->view = new BookView();
        $this->modelAuthor = new AuthorModel();
        $authHelper = new AuthHelper();
        $authHelper->checkLoggedIn();
    }

    //Imprime la lista de tareas 
    public function showBooks(){
        //obtiene las tareas del modelo
        $books = $this->model->getAllBooks();
        $modelAuthor = $this->modelAuthor->getAllAuthors();
        //actualizo la vista
        $this->view->showBooks($books, $modelAuthor);
    }

    function addBook() {
        // TODO: validar entrada de datos
        $title = $_POST['titulo'];
        $genre = $_POST['genero'];
        $id_author = $_POST['id_author'];

        //agrego imagen
        if ($_FILES['input_name']['type'] =="image/jpg" ||
            $_FILES['input_name']['type'] =="image/jpeg"||
            $_FILES['input_name']['type'] =="image/png" ){
            $this->model->insertBook($title, $genre, $id_author, $_FILES['input_name']['tmp_name']);
            }
            else{
                $id = $this->model->insertBook($title, $genre, $id_author);
            }
    }

    function  showEditBook($id){
            $books = $this->model->getRegisterBookById($id);
            $author = $this->modelAuthor->getRegisterAuthorById($id);
            $this->view->showEditBooks($books, $author);
    }

    function insertEditBook($id){
        if((isset($_POST['titulo'])&&isset($_POST['genero']))&&isset($_POST['id_author'])&&!empty($_POST['titulo'])&&!empty($_POST['genero'])&&!empty($_POST['id_author'])){      
            $title = $_POST['titulo'];
            $genre = $_POST['genero'];

            $this->model->insertEditBook($title, $genre, $id);
        }
    }

    function deleteBooks($id) {
        $this->model->deleteBookById($id);
    }
    
}