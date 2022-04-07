<?php 
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: OPTIONS,GET,POST,PUT,DELETE");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

$data = file_get_contents("php://input");

if(isset($_POST['userId'],$_POST['bookId'])){


require_once('../../db.php');
$database = DB::getInstance();
var_dump($_POST['userId']);
var_dump($_POST['userId']);
$checkbook =  $database->prepare("SELECT * FROM LendBook WHERE userId = :userId AND bookId = :bookId");
$checkbook->execute(["userId"=>$_POST['userId'],"bookId"=>$_POST['bookId'] ]);

if($checkemail->rowCount()===0){
print_r(json_encode(["result"=>false]));
}else{
    print_r(json_encode(["result"=>true]));
}

}
?>