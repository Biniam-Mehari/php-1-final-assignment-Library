<?php


include_once "service/BookService.php";
class MyListController
{
    private $bookService;
    public function __construct()
    {
        $this->bookService = new BookService();
    } 

    //shows the list of book by user id
    public function index()
    {
    $userId = $_SESSION["user"]->userId;  
    $myBookList = $this->bookService->getMyBookListbyId( $userId);
    include ('views/MyListView.php');
    }
   
    //adding book to a list 
    public function addToMyList()
    {
        if (isset($_POST["submit"])) {
            $bookId = $_POST["bookId"];        
        }
        $date=date("d-m-y");
        $id = $_SESSION["user"]->userId;
       $this->bookService->setInfoForMyList($id, $bookId, $date);
    }

    //returning a book after reading
    public function returnBook()
    {
        if (isset($_POST["submit"])) {
            $bookId = $_POST["bookId"];        
        }
        $id = $_SESSION["user"]->userId;
       $this->bookService->setInfoToreturnBook($id, $bookId);
    }
}