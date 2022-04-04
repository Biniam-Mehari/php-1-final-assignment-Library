<?php
include 'Menubar.php';
?>



<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="css/styleLogin.css">
<link rel="stylesheet" href="css/style1.css">



<h2>Add New Book</h2><br>
<div class="login">
    <form action="newbook/form" method="post">
        <label><b>Title</b></label>
        <br>
        <input type="text" name="title" id="title" placeholder="title" required>
        <br> <br>

        <label><b>Author</b> </label>
        <br>
        <input type="text" name="author" id="author" placeholder="Author" required>
        <br> <br>
        <label><b>Number of copies</b></label>
        <br>
        <input type="text" name="numberOfCopies" id="numberOfCopies" placeholder="number of copies" required>
        <br><br>
        <label><b>Description</b> </label>
        <br>
        <input type="text" name="description" id="description" placeholder="description" required>
        <br><br>
       
        <button type="submit" name="submit">Add Book</button>
        <br>
        <section id="ErrorMessage"></section>
    </form>

    <!-- javascript to check user information and display error messsage  -->
   
</div>
</body>

</html>