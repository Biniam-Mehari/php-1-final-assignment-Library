<?php

class LoginController
{
    public function index()
    {
        include_once('views/LoginView.php');
    }

    public function about()
    {
        echo "Home page about";
    }
}

if (isset($_POST["submit"])) {
    //  grapping data
    
     $email = $_POST["email"];
     $pwd = $_POST["pwd"];
  
  
     //instance signup model
      include_once("../../db.php") ;
      include "../service/LoginService.php";
      include "../model/Login.php";
      
      $login= new LoginModel($email,$pwd);
  
  
     //running error handlers and user signup
     $login->loginUser();
  
     //going to back to front page
     header("location: ../index.php?error=none");
  
  
  }