<?php

class LoginService extends DB {

    protected function getUser($email,$pwd){
        $stmt = $this-> getInstance()->prepare('SELECT _password FROM users WHERE email = ?;');
   
       

        if (!$stmt->execute(array($email))) {
            $stmt=null;
            echo("here");
            exit();
        }

        if ($stmt->rowCount()==0) {
            $stmt = null;
            echo '<script>alert("Welcome to Geeks for Geeks")</script>';
           
        }

        $pwdhashed = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $checkpassword = password_verify($pwd,$pwdhashed[0]["password"]);

        if ($checkpassword == false) {
            $stmt = null;
            header("location: ../index.php?error=wrongpassword");
            exit();
        }
        elseif ($checkpassword == true){
            $stmt = $this-> getInstance()->prepare('SELECT * FROM users WHERE email = ? AND "password" = ?;');
   
            if (!$stmt->execute(array($email,$pwd))) {
                $stmt=null;
                header("location: ../index.php?error=stmtfailed");
                exit();
            }

            if ($stmt->rowCount()==0) {
                $stmt = null;
                header("location: ../index.php?error=usernotfound");
                exit();
            }

            $user = $stmt->fetchAll(PDO::FETCH_ASSOC);
            session_start();
          //  $_SESSION["email"] = users[0][email];
        }
        $stmt=null;

    }

   


}