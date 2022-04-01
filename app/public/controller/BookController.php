<?php

class BookController
{
    public function index()
    {
        include ('views/BookView.php');
    }

    public function about()
    {
        echo "Home page about";
    }
}

if (isset($_POST["submit"])) {
    echo ("hello");
}