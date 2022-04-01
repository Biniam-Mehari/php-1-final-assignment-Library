<?php

class HomeController
{
    public function index()
    {
        include ('views/HomeView.php');
    }

    public function about()
    {
        echo "Home page about";
    }
}
