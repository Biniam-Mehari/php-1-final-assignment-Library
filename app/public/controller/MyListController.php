<?php

class MyListController
{
    public function index()
    {
        include ('views/MyListView.php');
    }

    public function about()
    {
        echo "Home page about";
    }
}