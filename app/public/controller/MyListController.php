<?php
session_start();
include_once "service/BookService.php";
class MyListController
{
    private $bookService;
    public function __construct()
    {
        $this->bookService = new BookService();
    } 

    public function index()
    {
    $id = $_SESSION["user"]->userId;    
    $myBookList = $this->bookService->getMyBookListbyId( $id);
    include ('views/MyListView.php');
    }
   
    public function addToMyList()
    {
        if (isset($_POST["submit"])) {
            $bookId = $_POST["bookId"];        
        }
        $date=date("d-m-y");
        $id = $_SESSION["user"]->userId;
       $this->bookService->setInfoForMyList($id, $bookId, $date);
    }
    public function returnBook()
    {
        if (isset($_POST["submit"])) {
            $bookId = $_POST["bookId"];        
        }
        $id = $_SESSION["user"]->userId;
       $this->bookService->setInfoToreturnBook($id, $bookId);
    }
}