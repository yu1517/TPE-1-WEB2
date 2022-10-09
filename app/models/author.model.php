<?php

class AuthorModel {

    private $db;
    public function __construct(){
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=db_tpe;charset=utf8' , 'root', '');
    }

    //Devuelve la lista de tareas completa
    function getAllAuthors(){

        //1. Abro la conexion
        //$db = $this->connect();

        //2.Enviar la consulta(2 sub pasos: prepare y execte)
        $query = $this->db->prepare("SELECT * FROM authors");
        $query->execute();

        //3. Obtengo la respuesta con un fetchAll(porque)
        $author = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos

        return $author;
    }

    function insertAuthor($name, $nationality, $birthdate) { 
        $query = $this->db->prepare("INSERT INTO authors (name,nationality, birthdate) VALUES (?, ?, ?)");
        $query->execute([$name, $nationality, $birthdate]);
        
        return $this->db->lastInsertId();
        header("Location: " . BASE_URL. 'author');
    }
    function deleteAuthorById($id){
        $query = $this->db->prepare('DELETE FROM authors WHERE id_author = ?');
        $query->execute([$id]);
        header("Location: " . BASE_URL. 'author');
    }
}