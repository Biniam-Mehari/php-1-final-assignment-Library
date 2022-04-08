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
        <br>
        <!-- table for list of books -->
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
            // this methode checks if there is a data in the array of books or not and display accordingly
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
                                <td> <button id="submit" type="submit" class="btn btn-dark" name="edit"> edit</button></td>
                               
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
    <br>
        <div class="login">
        <h2 class="text-dark">Book information</h2><br>

<!-- this form is to add, edit, remove books from and to the database -->
            <form class="bookinfo" id="bookinfo" action="newbook/form" method="post">
                <label for="title">Title</label>
                
                <input type="text" name="title" id="title" placeholder="title" required>
                <br> <br>

                <label><b>Author</b> </label>
                <br>
                <input type="text" name="author" id="author" placeholder="Author" required>
                <br> <br>
                <label><b>Number of copies</b></label>
                <br>
                <input type="text" name="numberOfCopies" id="numberOfCopies" placeholder="number of copies" required>
                <br>
                <small id="errornumber" class="errorcolour"></small>
                <br><br>
                <label><b>Description</b> </label>
                <br>
               <textarea class="form-control" name="description" id="description" cols="20" rows="3"></textarea>
                  <br><br>
                <input type="text" name="bookid" id="bookid" hidden>

                <button type="submit" id="submit" class="btn btn-success" name="addbook">Add Book</button>
                <button type="submit" id="submit" class="btn btn-warning" name="updatebook">Update</button>
                <button type="submit" id="submit" class="btn btn-danger" name="removebook">Remove</button>
                <br>
                <section id="ErrorMessage"></section>
            </form>
            <br>
             


        </div>
    </div>
</div>
<!-- connecting to js in order to check wheter there is a correct input or not -->
<script src="../js/manageBook.js"></script>

</body>

</html>