<?php
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
        //$booksInMyList = $this->bookService->getAllBooksbyId();
        include ('views/MyListView.php');
    }
   
    public function about()
    {
        echo "Home page about";
    }
}