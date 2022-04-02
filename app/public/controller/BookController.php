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
        
      include ('views/BookView.php');
    }
    public function  addNewbookview(){
        include ('views/AddBook.php');
    }
    public function about()
    {
        echo "Home page about";
    }

    public function getAllBooks(){
      return $this->bookService->getAllBooks();
      //include ('views/BookView.php');
    }
    public function addNewBook(){
        if (isset($_POST["submit"])) {
            $title = $_POST["title"];
            $description = $_POST["description"];
            $author = $_POST["author"];
            $imageid = $_POST["imageid"];
          
        }

       $this->bookService->setBook($title,$description,$author,$imageid);
       include ('views/BookView.php');
    }
}


