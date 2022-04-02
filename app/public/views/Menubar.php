<?php
 session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style1.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

   
</head>
<body>
  <nav>
    <div class="wrapper">
      <ul>
        <a href="home">
        <img class="logo" src="img/logo.png" alt="book" >
        </a>

        <li><a href="home">Home</a></li>
        <li><a href="BookView">Books</a></li>
        <li><a href="">My List</a></li>
        <li><a href="signup">Become a member</a></li>
        <li><a href="addnewbookview">Add new Book</a></li>
       
       <?php 
         echo('<li><a  href="login">LogIn</a></li>'); //<li><a class= "loginposition" href="login">LogIn</a></li>
          ?>
      
     
       
       
      </ul>
  
    </div>
  </nav>