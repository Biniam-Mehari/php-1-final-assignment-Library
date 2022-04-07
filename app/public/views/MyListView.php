<?php
include 'Menubar.php';

?>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="css/style1.css">

<br><br>




<div class="bookcard">

    <div class="row">
        <?php
        if (count($myBookList)==0) {
            echo("There is no book in your list. Add some books to show it here and read.");
        }else{
        foreach ($myBookList as $book) {
        ?>
            <br>
            <div class="col-sm-4">
                <form id="returnBook" action="returnBook" method="post">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Title: <?php echo $book->getTitle() ?></h5>
                            <p class="card-text">author: <?php echo $book->getAuthor() ?></p>
                            <p class="card-text"><?php echo $book->getDescription() ?></p>
                            <input name="bookId" type="text" value=<?php echo $book->getBookId() ?> hidden>
                            <br><br>
                            <button class="space" type="submit" name="submit">Return</button><br>

                        </div>
                    </div>
                </form>
            </div>
        <?php
        }
    }
        ?>

        <br><br>


    </div>

</div>
</div>


<script src="../js/myList.js"></script>
</body>

</html>