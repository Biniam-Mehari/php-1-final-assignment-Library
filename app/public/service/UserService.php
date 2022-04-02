<?php
include_once "../db.php";
class UserService {

    private DB $db;
    public function __construct()
    {
        $this->db = DB::getInstance();
    }

    public function loginUser(){
        if (isset($_POST["submit"])) {
            
            $email = $_POST["email"];
            $pwd = $_POST["pwd"];
        }
            
        $stmt = $this->db-> getInstance()->prepare('SELECT * FROM users WHERE email = :email AND `password` = :password ;');
        $stmt->execute(["email" => $email,"password"=>$pwd]);

        if($stmt->rowCount()>0){
            $user = $stmt->fetchObject();
            session_start();
            $_SESSION["user"] = $user;
          echo "<script>location.assign('../home')</script>";
        }else{
            echo '<script>alert("username or password is incorrect!")</script>';
            echo "<script>location.assign('../login')</script>";
        }
    }

    public function setUser($fname,$lname,$email,$pwd){


        $data = array(

            'firstName' => $fname,

            'lastName' => $lname,

            'email' => $email,

            'password' => $pwd

        );
        $this->insertuser($data);
    }

    public function insertuser($data){
        
        $stmt = $this->db->prepare("INSERT into `Account` (firstName, lastName, email, `password`) VALUES (:firstName, :lastName, :email, :password)");

        $stmt->execute(["firstName" => $data['firstName'], "lastName" => $data['lastName'], "email" => $data['email'], "password" => $data['password']]);

    }


}