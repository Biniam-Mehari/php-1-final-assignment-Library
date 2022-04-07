<?php
include 'Menubar.php';
include_once "controller/BookController.php";
include_once "model/Book.php";
?>



<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="css/styleLogin.css">
<link rel="stylesheet" href="css/style1.css">


<div class="row">
    <div class="col-sm-5">

    <div class="bookcard">
    <div class="row">
        <?php
         if (count($books)==0) {
            echo("There is no book to read. incase of a problem contact the library Admin.");
        }else{
        foreach ($books as $book) {
        ?>

            <br>

            
                <form id="addtomylist" action="addToMyList" method="post">
                   
                            <h5 >Title: <?php echo $book->getTitle() ?></h5>
                            <p >author: <?php echo $book->getAuthor() ?></p>
                            <button  id="submit" type="submit" name="edit"> edit</button>
                            <button  id="submit" type="submit" name="remove"> remove</button>
                            <input id="bookId" name="bookId" type="text" value=<?php echo $book->getBookId() ?> hidden>
                            <input id="userId" name="userId" type="text" value=<?php echo $_SESSION["user"]->userId ?> hidden>
                            <br><br>
                    
                </form>
                <br>
            
        <?php
        }
    }
        ?>




    </div>
</div>

    </div>
    <div class="col-sm-6">
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
    </div>
</div>
</body>

</html>