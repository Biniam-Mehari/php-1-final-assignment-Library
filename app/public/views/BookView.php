<?php
include 'Menubar.php';
include_once "controller/BookController.php";
include_once "model/Book.php";

//$bookService = new BookService();
//$books = $this->bookService->getAllBooks();
echo ('<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">');
echo (' <link rel="stylesheet" href="css/style1.css">');


?>

<div class="bookcard">
    <div class="row">
        <?php
         if (count($books)==0) {
            echo("There is no book to read. incase of a problem contact the library Admin.");
        }else{
        foreach ($books as $book) {
        ?>

            <br>

            <div class="col-sm-4">
                <form id="addtomylist" action="addToMyList" method="post">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Title: <?php echo $book->getTitle() ?></h5>
                            <p class="card-text">author: <?php echo $book->getAuthor() ?></p>
                            <p class="card-text"><?php echo $book->getDescription() ?></p>
                            <br><br>
                            <input id="bookId" name="bookId" type="text" value=<?php echo $book->getBookId() ?> hidden>
                            <input id="userId" name="userId" type="text" value=<?php echo $_SESSION["user"]->userId ?> hidden>
                            <button class="space" id="submit" type="submit" name="submit">Lend book</button>
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

<script src="../js/book.js"></script>
</body>

</html>