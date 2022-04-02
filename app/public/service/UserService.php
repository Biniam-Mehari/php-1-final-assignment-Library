<?php
include_once "../db.php";
class UserService {

    private DB $db;
    public function __construct()
    {
        $this->db = DB::getInstance();
    }

    public function loginUser($email,$password){
        $stmt = $this->db-> getInstance()->prepare('SELECT `password` FROM users WHERE email = :email;');
        $stmt->execute($email);
    }

    public function setUser($fname,$lname,$email,$pwd){


        $data = array(

            'firstName' => $fname,

            'lastName' => $lname,

            'email' => $email,

            '_password' => $pwd

        );
        $this->insertuser($data);
    }

    public function insertuser($data){
        
        $stmt = $this->db->prepare("INSERT into `Account` (firstName, lastName, email, `password`) VALUES (:firstName, :lastName, :email, :password)");

        $stmt->execute(["firstName" => $data['firstName'], "lastName" => $data['lastName'], "email" => $data['email'], "password" => md5($data['_password'])]);

    }


}