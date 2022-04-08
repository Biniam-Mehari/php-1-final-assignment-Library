<?php 
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: OPTIONS,GET,POST,PUT,DELETE");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

$data = file_get_contents("php://input");

if(isset($_POST['userId']) && isset($_POST['bookId'])){
$userId = $_POST['userId'];
$bookId = $_POST['bookId'];

require_once('../../db.php');
$database = DB::getInstance();

// this will check if the book selected is already adde in the users list
$checkbook =  $database->prepare("SELECT * FROM LendBook WHERE userId = :userId AND bookId = :bookId AND returned = 0");
$checkbook->execute(["userId"=>$userId,"bookId"=>$bookId]);

//if the result is true then he can add the book otherwise he will be informed that the book is already in his list
if($checkbook->rowCount()===0){
print_r(json_encode(["result"=>false]));
}else{
    print_r(json_encode(["result"=>true]));
}

}
?>