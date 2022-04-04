<?php
//require_once('../db.php');
//require_once('model/Book.php');

require_once("../db.php");
require_once("model/Book.php");


class BookService 
{

    private DB $db;

    public function __construct()
    {
      $this->db = DB::getInstance();
    }

    public function getAllBooks()
    {
        //$db = DB::getInstance();
        $stmt = $this->db->prepare("select bookId,title,description,author,imageId from Book");
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Book');
        $stmt->execute();

        $books = $stmt->fetchAll();
        return $books;

        
    }
    public function setBook($title,$description,$author,$numberOfCopies){


        $data = array(

            'title' => $title,

            'description' => $description,

            'author' => $author,

            'numberOfCopies' => $numberOfCopies

        );
        $this->insertBook($data);
    }
    public function insertBook($data)
    {
       // $db = DB::getInstance();
        $stmt = $this->db->prepare("INSERT into Book (title, `description`, author, imageId) VALUES (:title,  :description,:author, :imageId)");

        $stmt->execute(["title" => $data['title'],  "description" => $data['description'],"author" => $data['author'], "imageId" => $data['numberOfCopies']]);
    }
    
   

}