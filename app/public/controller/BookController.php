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
        if (isset($_POST["submit"])) {
            $title = $_POST["title"];
            $description = $_POST["description"];
            $author = $_POST["author"];
            $numberOfCopies = $_POST["numberOfCopies"];
          
        }

       $this->bookService->setBook($title,$description,$author,$numberOfCopies);
      
    }
}


