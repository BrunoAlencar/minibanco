<?php
include 'Conection.php';
//conection
$pdo = new Conection();
$pdo->getInstance();
//set variables
$nome ="";$id ="";$email ="";$password ="";
if(isset($_POST['id']) && isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['password']) ) {
    $id = $_POST['id'];
    $email = $_POST['email'];
    $nome = $_POST['nome'];
    $password = $_POST['password'];
}

//insert into db
if($id != "" && $nome != "" && $email != "" && $password != "" ) {
    $insert = $pdo->prepare("INSERT INTO user(user_name,user_email,user_password)VALUES(:nome,:email,:password) ");
    $insert->bindValue(":nome", $nome);
    $insert->bindValue(":email", $email);
    $insert->bindValue(":password", $password);
    $insert->execute();
}

?>