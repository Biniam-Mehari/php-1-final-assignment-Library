<?php
include 'Menubar.php';
include_once "controller/BookController.php";
include_once "model/Book.php";
?>



<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="css/styleLogin.css">
<link rel="stylesheet" href="css/style1.css">


<div class="row">
    <div class="col-md-6">
        <br><br>
        <table class="table" id = 'dsTable' >
            <thead>
                <tr>
                    <th hidden>Book Id</th>
                    <th>Book Title</th>
                    <th >Author</th>
                    <th hidden>Number of copies</th>
                    <th hidden>Description</th>
                    <th>edit</th>
                    
                </tr>
            </thead>
            <?php
            if (count($books) == 0) {
                echo ("There is no book to read. incase of a problem contact the library Admin.");
            } else {
                foreach ($books as $book) {
            ?>

                   
                    <tbody>
                     
                            <tr>
                                <td hidden> <?php echo $book->getBookId() ?></td>
                                <td > <?php echo $book->getTitle() ?></td>
                                <td > <?php echo $book->getAuthor() ?></td>
                                <td hidden> <?php echo $book->getNumberOfCopies() ?></td>
                                <td hidden> <?php echo $book->getDescription() ?></td>
                                <td> <button id="submit" type="submit" name="edit"> edit</button></td>
                               
                                </td>

                            </tr>
                        
                    </tbody>
            <?php
                }
            }
            ?>


        </table>


    </div>




    <div class="col-sm-6">
        <h2>Book information</h2><br>
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
                <input type="text" name="bookid" id="bookid" hidden>

                <button type="submit" class="addbook" name="addbook">Add Book</button>
                <button type="submit" class="updatebook" name="updatebook">Update</button>
                <button type="submit" class="removebook" name="removebook">Remove</button>
                <br>
                <section id="ErrorMessage"></section>
            </form>
            <br>
             


        </div>
    </div>
</div>
<script src="../js/manageBook.js"></script>

</body>

</html>