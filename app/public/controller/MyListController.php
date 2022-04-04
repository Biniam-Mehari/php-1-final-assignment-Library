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
  // $date = date("d-m-y");
   //var_dump( $date);
//    $id = ($_GET['id']);  
//         var_dump( $id);

    include ('views/MyListView.php');
    }
   
    public function about()
    {
        echo "Home page about";
    }
}