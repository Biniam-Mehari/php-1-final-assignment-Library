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
</head>

<body>
  <nav>
    <div>
      <ul>
        <a href="home">
          <img class="logo" src="img/logo.png" alt="book">
        </a>
        <?php
        if (isset($_SESSION["user"])) {
        }
        ?>
        <li><a href="home">Home</a></li>
        <li><a href="BookView">Books</a></li>
        <li><a href="addnewbookview">Add new Book</a></li>

        <?php
        if (isset($_SESSION["user"])) {
          echo ' <li><a href="mylist">My List</a></li>';
          echo '           ';
          echo ' <li> Welcome ' . $_SESSION["user"]->firstName . '  ' . $_SESSION["user"]->lastName . '<li>';
          echo '<li><a  href="logout">Logout</a></li>';
        } else {
          echo '<li><a href="signup">Become a member</a></li>';
          echo '<li><a  href="login">LogIn</a></li>';
        }
        ?>




      </ul>

    </div>
  </nav>