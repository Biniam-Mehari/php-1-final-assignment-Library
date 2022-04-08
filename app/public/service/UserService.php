<?php
include_once "../db.php";
class UserService
{

    private DB $db;
    public function __construct()
    {
        $this->db = DB::getInstance();
    }

    //checking user info and if it succeded set the session and sign in user 
    public function loginUser()
    {
        try {
            if (isset($_POST["submit"])) {

                $email = $_POST["email"];
                $pwd = $_POST["pwd"];
            }

            $stmt = $this->db->getInstance()->prepare('SELECT * FROM `Account` WHERE email = :email AND `password` = :password ;');
            $stmt->execute(["email" => $email, "password" => $pwd]);

            if ($stmt->rowCount() > 0) {
                $user = $stmt->fetchObject();

                $_SESSION["user"] = $user;
                echo "<script>location.assign('../home')</script>";
            } else {

                echo "<script>location.assign('../login')</script>";
            }
        } catch (PDOException $e) {

            echo $e;
        }
    }

    //grapping data of a user
    public function setUser($fname, $lname, $email, $pwd)
    {


        $data = array(

            'firstName' => $fname,

            'lastName' => $lname,

            'email' => $email,

            'password' => $pwd,
            'role' => "user"

        );
        $this->insertuser($data);
    }

    // inserting a new user
    public function insertuser($data)
    {
try{
        $stmt = $this->db->prepare("INSERT into `Account` (firstName, lastName, email, `password`,`role`) VALUES (:firstName, :lastName, :email, :password, :role)");

        $stmt->execute(["firstName" => $data['firstName'], "lastName" => $data['lastName'], "email" => $data['email'], "password" => $data['password'], "role" => $data['role']]);
    } catch (PDOException $e) {

        echo $e;
    }
    }
}
