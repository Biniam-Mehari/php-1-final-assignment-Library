<?php


require_once("../db.php");
require_once("model/Book.php");



class BookService extends PDO
{

    private DB $db;

    public function __construct()
    {
        $this->db = DB::getInstance();
    }

    //gets all books from db
    public function getAllBooks()
    {
        //$db = DB::getInstance();
        $stmt = $this->db->prepare("select bookId,title,description,author,numberOfCopies from Book ORDER BY bookId DESC");
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Book');
        $stmt->execute();

        $books = $stmt->fetchAll();
        return $books;
    }

    //grapping book info and save in an array
    public function setBook($title, $description, $author, $numberOfCopies)
    {


        $data = array(

            'title' => $title,

            'description' => $description,

            'author' => $author,

            'numberOfCopies' => $numberOfCopies

        );
        $this->insertBook($data);
        echo "<script>location.assign('../managebooksview')</script>";
    }

    //inserting a book to db
    public function insertBook($data)
    {
        // $db = DB::getInstance();
        $stmt = $this->db->prepare("INSERT into Book (title, `description`, author, numberOfCopies) VALUES (:title,  :description,:author, :numberOfCopies)");

        $stmt->execute(["title" => $data['title'],  "description" => $data['description'], "author" => $data['author'], "numberOfCopies" => $data['numberOfCopies']]);
    }

    //getting all the book from a list according the user id
    public function getMyBookListbyId($id)
    {
        try {

            $data = array(

                'userId' => $id,
            );

            $stmt = $this->db->prepare("select l.dateOfLend,l.bookId, b.title, b.description, b.author, b.numberOfCopies from LendBook as l INNER JOIN Account AS a ON l.userId = a.userId INNER JOIN Book AS b ON l.bookId = b.bookId where l.userId = :userId AND l.returned = 0 ORDER BY lendId DESC");
            $stmt->setFetchMode(PDO::FETCH_CLASS, 'Book');
            $stmt->execute(["userId" => $data['userId']]);

            $mybooklist = $stmt->fetchAll();
            return $mybooklist;
        } catch (PDOException $ex) {

            echo "connection failed" . $ex->getMessage();
        }
    }

    //grapping data for book list
    public function setInfoForMyList($id, $bookId, $date)
    {


        $data = array(

            'userid' => $id,

            'bookId' => $bookId,

            'date' =>  $date,

            'returned' => 0
        );

        $this->insertlendinfo($data);
        echo "<script>location.assign('../mylist')</script>";
    }

    //inserting data to the lendbook table 
    public function insertlendinfo($data)
    {
        try {
            $stmt = $this->db->prepare("INSERT into LendBook (dateOfLend, returned, bookId, userId) VALUES (:dateOfLend, :returned, :bookId, :userId)");
            $stmt->execute(["dateOfLend" => $data['date'],  "returned" => $data['returned'], "bookId" => $data['bookId'],  "userId" => $data['userid']]);
        } catch (PDOException $ex) {

            echo "connection failed" . $ex->getMessage();
        }
    }

    //returning a book from a user
    public  function setInfoToreturnBook($id, $bookId)
    {
        $data = array(

            'userid' => $id,

            'bookId' => $bookId,

            'returned' => 1
        );

        $this->returnBook($data);
        echo "<script>location.assign('../mylist')</script>";
    }

    public function returnBook($data)
    {
        try {
            $stmt = $this->db->prepare("UPDATE LendBook SET returned= :returned WHERE bookId= :bookId AND userId= :userId");
            $stmt->execute(["returned" => $data['returned'], "bookId" => $data['bookId'],  "userId" => $data['userid']]);
        } catch (PDOException $ex) {

            echo "connection failed" . $ex->getMessage();
        }
    }

    //removing book
    public function removeBook($id)
    {
        try {
            $stmt = $this->db->prepare("Delete from Book WHERE bookId= :bookId");
            $stmt->execute(["bookId" => $id]);
            echo "<script>location.assign('../managebooksview')</script>";
        } catch (PDOException $ex) {

            echo "connection failed" . $ex->getMessage();
        }
    }

    //updating book
    public function updateBook($title, $description, $author, $numberOfCopies, $bookId)
    {
        try {
            $stmt = $this->db->prepare("UPDATE Book SET title= :title, `description`= :description ,author= :author, numberOfCopies= :numberOfCopies WHERE bookId= :bookId");
            $stmt->execute(["title" => $title, "description" => $description,  "author" => $author, "numberOfCopies" => $numberOfCopies,  "bookId" => $bookId]);
            echo "<script>location.assign('../managebooksview')</script>";
        } catch (PDOException $ex) {

            echo "connection failed" . $ex->getMessage();
        }
    }
}
