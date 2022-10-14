<?php

class HomeModel{
    private $db;

    public function  __construct(){
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=db_tpe;charset=utf8' , 'root', '');
    }
    function getAllBooksHome(){
        $query = $this->db->prepare("SELECT books.id, books.id_author, books.title, books.genre, authors.name FROM books INNER JOIN authors ON books.id_author = authors.id_author");
        $query->execute();

        //3. Obtengo la respuesta con un fetchAll(porque)
        $books = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos

        return $books;
    }
    public function getFilter($id){
        $query = $this->db->prepare("SELECT * FROM books WHERE id_author = ?"); 
        $query->execute([$id]);

        $filter = $query->fetchAll(PDO::FETCH_OBJ);
        return $filter;
    }
}