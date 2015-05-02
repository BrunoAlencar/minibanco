<?php


//conection
$pdo = new Conection();
$pdo->getInstance();
//userController
$userController = new UserController();


//set variables

$email =" "; $password=" ";
if(isset($_POST['email']) && isset($_POST['password'])){
    $email= $_POST['email'];
    $password= $_POST['password'];

//validation

if($email != "" && $password != "") {
    foreach ($userController->findAll() as $user) {
        if ($email != $user->user_id) {
            echo "<h1>email incorreto!</h1>";
        } elseif ($password != $user->user_password) {
            echo "<h1>Senha incorreta!</h1>";
        }
    }

}
}
?>