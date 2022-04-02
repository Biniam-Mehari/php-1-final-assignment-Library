<?php
include_once "../db.php";
class SignupService{

    //private DB $db;

    public function __construct()
    {
        $this->db = DB::getInstance();
    }


    protected function setUser($fname,$lname,$email,$pwd){

        

        $data = array(

            'firstName' => $fname,

            'lastName' => $lname,

            'email' => $email,

            '_password' => $pwd

        );

        
      
        $this->insertuser($data);
    
     //   $stmt = $this-> db ->prepare('INSERT INTO users (firstName,lastName,email,_password) VALUES ("Biniam","mehari","t","y");');
   
       // $hashedpwd = password_hash($pwd,PASSWORD_DEFAULT);
        
    //   if (!$stmt->execute()) {
    //         $stmt=null;
    //       echo($fname);
    //       echo($lname);
    //       echo($email);
    //       echo($pwd);
    //         exit();
    //     }
    //     $stmt=null;
    //     echo("you are now a member");

    }

    protected function checkUser($email){
        
        if (isset($_POST["submit"])) {
            $db = DB::getInstance();

        $result = 0;

            $email = $_POST['email'];

            $login = $db->prepare("SELECT * FROM Users WHERE email = :email");



            $login->execute(["email" => $email]);



            if ($login->rowCount() > 0) {

                $result = 1;

            } else {
            $result = 2;

            }

        }
        return $result;
        // $this->db = DB::getInstance();
        // $stmt = $this-> db->prepare('SELECT email from users WHERE email = ?;');
        // if ($stmt->execute(array($email))) {
        //     $stmt=null;
        //     echo("user exist");
        //     exit();
        // }

        // $resultCheck=false;
        // if ($stmt->rowCount()>0) {
        //     $resultCheck=true;
        // }

        // else {
        //     $resultCheck=false;
        // }

        // return  $resultCheck;
    }
    public function insertuser($data){
        $db = DB::getInstance();
       
        $count = $db->prepare("INSERT into `Account` (firstName, lastName, email, `password`) VALUES (:firstName, :lastName, :email, :password)");



        $count->execute(["firstName" => $data['firstName'], "lastName" => $data['lastName'], "email" => $data['email'], "password" => md5($data['_password'])]);

    }

    public function getUser() {
       
        if (isset($_POST["submit"])) {

        $result = 0;

            $email = $_POST['email'];

            $login = $this->db->prepare("SELECT * FROM Users WHERE email = :email");



            $login->execute(["email" => $email]);



            if ($login->rowCount() > 0) {

                $result = 1;

            } else {
            $result = 2;

            }

        }
        return $result;

    }


}