<?php
include_once "service/BookService.php";
class BookController
{
    private $bookService;
    public function __construct()
    {
        $this->bookService = new BookService();
    }
    public function index()
    {
      $books = $this->bookService->getAllBooks();
      
      include ('views/BookView.php');
    
    }
    public function manageBooksview(){

        $books = $this->bookService->getAllBooks();
        include ('views/manageBook.php');
    }
   

    public function addNewBook(){
        if (isset($_POST["addbook"])) {
            $title = $_POST["title"];
            $description = $_POST["description"];
            $author = $_POST["author"];
            $numberOfCopies = $_POST["numberOfCopies"];
            $this->bookService->setBook($title,$description,$author,$numberOfCopies);
        }
        elseif(isset($_POST["removebook"])){
            $id = $_POST["bookid"];
            var_dump($id);
           // $this->bookService->removeBook($id);
        }
        elseif(isset($_POST["updatebook"])){
            $id = $_POST["bookid"];
            $title = $_POST["title"];
            $description = $_POST["description"];
            $author = $_POST["author"];
            $numberOfCopies = $_POST["numberOfCopies"];
           // $this->bookService->setBook($title,$description,$author,$numberOfCopies);
        }

      
      
    }
}


