<?php
include 'Menubar.php';
include_once "controller/BookController.php";
include_once "model/Book.php";

$bookService = new BookService();
$books = $this->bookService->getAllBooks();
foreach ($books as $book) {
?>

<form action="controller/book.controller.php" method="post">
    <div class="container"> 
        <div class="card mb-3" style="width: 1200px; height: 200px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="img/logo.png" class="pic" alt="...">
                </div>
                    <div class="col-md-8">
                        <div class="card-body">
                        
                            <h5 class = "space"><?php echo $book->getTitle() ?></h5>
                            <h6 class = "space">author: <?php echo $book->getAuthor() ?></h6>

                            <p class="card-text"><?php echo $book->getDescription() ?></p>
                            <button class="space" type="submit" name="submit">Lend book</button>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</form> 
<?php
}
?>
</body>
</html>