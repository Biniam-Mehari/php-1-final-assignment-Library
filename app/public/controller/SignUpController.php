<?php
//instance signup model
include_once "../db.php";
include_once "service/SignUpService.php";
include_once "model/SignUp.php";
class SignUpController
{
    public function index()
    {
        include_once('views/SignUpView.php');
    }

    public function about()
    {
        echo "Home page about";
    }

    public function signup()
    {
        if (isset($_POST["submit"])) {
            //  grapping data
             $fname = $_POST["fname"];
             $lname = $_POST["lname"];
             $email = $_POST["email"];
             $pwd = $_POST["pwd"];
             $rpwd = $_POST["rpwd"];
          
             
              
              $signup= new SignupModel($fname,$lname,$email,$pwd,$rpwd);
          
          
             //running error handlers and user signup
             $signup->signupUser();
          
             //going to back to front page
             //header("location: ../index.php?error=none");
          
             include_once('../views/HomeView.php');
          }
    }




}

