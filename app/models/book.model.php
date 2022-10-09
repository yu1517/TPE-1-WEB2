<?php
class BookModel {

    private $db;
    public function __construct(){
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=db_tpe;charset=utf8' , 'root', '');
    }

    //Devuelve la lista de tareas completa
    function getAllBooks(){

        //1. Abro la conexion
        //$db = $this->connect();

        //2.Enviar la consulta(2 sub pasos: prepare y execte)
        $query = $this->db->prepare("SELECT books.id, books.id_author, books.title, books.genre, authors.name FROM books INNER JOIN authors ON books.id_author = authors.id_author"); FROM books ");
        $query->execute();

        //3. Obtengo la respuesta con un fetchAll(porque)
        $books = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos

        return $books;
    }

    //Inserta una tarea en la base de datos.

    function insertBook($title, $genre) {

        $query = $this->db->prepare("INSERT INTO books (title, genre) VALUES (?, ?)");
        $query->execute([$title, $genre, false]);

        return $this->db->lastInsertId();
    }

    //Elimina una tarea dado su id
    function deleteBookById($id){
        $query = $this->db->prepare('DELETE FROM books WHERE id = ?');
        $query->execute([$id]);
    }
}

