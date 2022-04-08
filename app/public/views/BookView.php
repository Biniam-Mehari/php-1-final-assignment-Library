<?php
include 'Menubar.php';
include_once "controller/BookController.php";
include_once "model/Book.php";


echo ('<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">');
echo (' <link rel="stylesheet" href="css/style1.css">');


?>

<div class="bookcard">
    <div class="row">
        <?php
        // this will check if my array is empty or not 
         if (count($books)==0) {
            echo("There is no book to read. incase of a problem contact the library Admin.");
        }else{

            //filling all the book information
        foreach ($books as $book) {
        ?>

            <br>

            <div class="col-sm-4">
                <form id="addtomylist" action="addToMyList" method="post">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Title: <?php echo $book->getTitle() ?></h5>
                            <h6 class="card-text">Author: <?php echo $book->getAuthor() ?></h6>
                            <p class="card-text"><?php echo $book->getDescription() ?></p>
                            <br><br>
                            <input id="bookId" name="bookId" type="text" value=<?php echo $book->getBookId() ?> hidden>
                            <input id="userId" name="userId" type="text" value=<?php echo $_SESSION["user"]->userId ?> hidden>
                            <button  class="btn btn-warning" id="lendbook" type="submit" name="submit">Lend book</button>
                            <p class="card-text text-success"> <?php echo $book->getNumberOfCopies() ?> copies Available</p>
                            <small id="displayerror"></small>
                        </div>
                    </div>
                </form>
               
                <br>
            </div>
            
        <?php
        }
    }
        ?>



    </div>
</div>


</body>

</html>