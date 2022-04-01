<?php

class SignupModel extends SignupService{
    private ?string $fname= null;
    private ?string $lname=null;
    private ?string $email=null;
    private ?string $pwd=null;
    private ?string $rpwd=null;

    public function __construct($fname,$lname,$email,$pwd,$rpwd){
        $this->fname=$fname;
        $this->lname=$lname;
        $this->email=$email;
        $this->pwd=$pwd;
        $this->rpwd=$rpwd;
    }
    
   public function signupUser(){
        if ($this->emptyInput()==false) {
            echo("location: ../index.php?error=emptyinput");
            exit();
        }

        if ($this->invalidFname()==false) {
        //echo("location: ../index.php?error=invalidFname");
        
        exit();
        }


        if ($this->invalidLname()==false) {
           echo("location: ../index.php?error=invalidLname");
            exit();
        }

        if ($this->invalidEmail()==false) {
            echo("location: ../index.php?error=invalidEmail");
            exit();
        }

        if ($this->pwdMatch()==false) {
           // echo("location: ../index.php?error=pwdnotMatch");
           echo '<script>alert("Welcome to Geeks for Geeks")</script>';
           echo "<script>location.assign('../signup')</script>";
            
        }

        if ($this->emailAlreadyused()==true) {
            echo("location: ../index.php?error=emailAlreadyused");
            exit();
        }

        $this->setUser($this->fname,$this->lname,$this->email,$this->pwd);
      
   }

   private function emptyInput(){
        $result=false;
        if (empty(($this->fname) || ($this->lname) || ($this->email) || ($this->pwd) || ($this->rpwd) )) {
        $result=false;
        }
        else {
        $result=true;
        }
        return $result;
    }

   private function invalidFname(){
        $result=false;
        if (!preg_match("/^[a-zA-Z]*$/",$this->fname)) {
            $result=false;
        }
        else {
            $result=true;
        }
        return $result;
   }

   private function invalidLname(){
        $result=false;
        if (!preg_match("/^[a-zA-Z]*$/",$this->lname)) {
            $result=false;
        }
        else {
            $result=true;
        }
        return $result;
    }

    private function invalidEmail(){
        $result=false;
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $result=false;
        }
        else {
            $result=true;
        }
        return $result;
    }

    private function pwdMatch(){
        $result=false;
        if ($this->pwd !== $this->rpwd) {
            $result=false;
        }
        else {
            $result=true;
        }
        return $result;
    }

    private function emailAlreadyused(){
        $result=false;
        if ($this->checkUser($this->email)==1) {
            $result=true;
        }
        else {
            $result=false;
        }
        return $result;
    }
    

}