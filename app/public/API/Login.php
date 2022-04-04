<?php 
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: OPTIONS,GET,POST,PUT,DELETE");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

$data = file_get_contents("php://input");

if(isset($_POST['email'])  && isset($_POST['pwd'] )){


require_once('../../db.php');
$database = DB::getInstance();

$login =  $database->prepare("SELECT * FROM Account WHERE `password` = :password AND email = :email");
$login->execute(["password"=>$_POST['pwd'], "email"=>$_POST['email']]);

if($login->rowCount()===1){
print_r(json_encode(["result"=>true]));
}else{

    print_r(json_encode(["result"=>"    
    <div class='alert mt-3' role='alert' style=\"width: 100%; color: #ffffff;background-color: #ff162b;\">
    Login failed, Your email address or password is not correct </div>"]));
}

}
?>