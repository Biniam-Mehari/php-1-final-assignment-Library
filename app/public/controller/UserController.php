<?php
//include_once "../db.php";
include_once "service/UserService.php";


class UserController
{
    private $userservice;
    function __construct()
    {
        $this->userservice = new UserService();
    }

    public function signUpView(){
        include_once('views/SignUpView.php');
    }
    public function loginView(){
        include_once('views/LoginView.php');
    }

    public function loginUser(){

    }

    public function logOutUser(){
        session_start();
        session_unset();
        session_destroy();
        include_once ('views/HomeView.php');
    }
    public function setUser()
    {
        if (isset($_POST["submit"])) {
            $fname = $_POST["fname"];
            $lname = $_POST["lname"];
            $email = $_POST["email"];
            $pwd = $_POST["pwd"];
            $rpwd = $_POST["rpwd"];
            $this->userservice->setUser($fname, $lname, $email, $pwd);
        }

        header('views/LoginView.php');
    }
}
