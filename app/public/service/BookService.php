<?php


require_once("../db.php");
require_once("model/Book.php");
require_once("model/MyList.php");


class BookService
{

    private DB $db;

    public function __construct()
    {
        $this->db = DB::getInstance();
    }

    public function getAllBooks()
    {
        //$db = DB::getInstance();
        $stmt = $this->db->prepare("select bookId,title,description,author,numberOfCopies from Book");
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Book');
        $stmt->execute();

        $books = $stmt->fetchAll();
        return $books;
    }
    public function setBook($title, $description, $author, $numberOfCopies)
    {


        $data = array(

            'title' => $title,

            'description' => $description,

            'author' => $author,

            'numberOfCopies' => $numberOfCopies

        );
        $this->insertBook($data);
        echo "<script>location.assign('../BookView')</script>";
    }
    public function insertBook($data)
    {
        // $db = DB::getInstance();
        $stmt = $this->db->prepare("INSERT into Book (title, `description`, author, numberOfCopies) VALUES (:title,  :description,:author, :numberOfCopies)");

        $stmt->execute(["title" => $data['title'],  "description" => $data['description'], "author" => $data['author'], "numberOfCopies" => $data['numberOfCopies']]);
    }

    // public function getAllBooksbyId()
    // {
    //     try {
    //         $id = $_SESSION["user"]->id;
    //         $stmt = $this->db->prepare("select l.dateOfLend,l.bookId, l.title, l.description, l.author, imageId from LendBook as l INNER JOIN Account AS a ON l.userId = a.userId INNER JOIN Book AS b ON l.bookId = b.bookId where l.userId = :userId AND l.returned = 0");
    //         $stmt->bind_param('s', $id);
    //         $stmt->execute();

    //         $result = $stmt->get_result();
    //         while ($row = $result->fetch_assoc()) {

    //             $dateOfLend = $row["dateOfLend"];
    //             $bookId = $row["bookId"];
    //             $title = $row["title"];
    //             $description = $row["description"];
    //             $author = $row["author"];
    //             $numberOfCopies = $row["numberOfCopies"];

    //             $book = new Book($bookId, $title, $description, $author, $numberOfCopies);
    //             $mylist = new MyList($dateOfLend, $book);
    //             $results[] =  $mylist;
    //         }
    //           return $results;
    //     } catch (PDOException $ex) {

    //         echo "connection failed" . $ex->getMessage();
    //     }
    // }
}
