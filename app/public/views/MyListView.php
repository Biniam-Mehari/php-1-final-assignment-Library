<?php
include 'Menubar.php';
include_once "model/MyList.php";

?>

 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style1.css">
    
    <br><br>

    <form action="controller/book.controller.php" method="post">
    <div class="bookcard">

        <div class="row">
            <?php
            foreach ($booksInMyList as $book) {
            ?>
            <br><br>
                <div class="col-sm-4">
                    <div class="card" >
                        <div class="card-body">
                            <h5 class="card-title">Title: <?php echo $book->getTitle() ?></h5>
                            <p class="card-text">author: <?php echo $book->getAuthor() ?></p>
                            <p class="card-text"><?php echo $book->getDescription() ?></p>
                            <br><br>
                            <p class="card-text">15 left to return</p>
                            <button class="space" type="submit" name="submit">Read</button>
                            <button class="space" type="submit" name="submit">Return</button>
                        </div>
                    </div>
                </div>
                <br><br>
            
            <?php
            }
            ?>
        </div>
        <br><br>
    </div>
    </div>

</form>

</body>
</html>