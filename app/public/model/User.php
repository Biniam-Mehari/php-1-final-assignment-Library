<?php

class User
{
    private int $id;
    private string $firstName;
    private string $lastName;
    private string $email;
    private string $password;

    function __construct($id,$firstName,$lastName,$email,$password){
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->password = $password;
    }

}