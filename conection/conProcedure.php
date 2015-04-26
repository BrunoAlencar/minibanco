<?php
include 'config.php';
$connect = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

if (!$connect) {
    die("Erro com banco de dados!");
}else{
    if (!isset($_POST['name']) || !isset($_POST['email']) || !isset($_POST['id']) || !isset($_POST['password'])) {
       die('digite todos os campos!');

    }else{
        $id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
    }
}
if($_POST['name']!=""){
    $sql =  "INSERT INTO user(user_id,user_name,user_email,user_password) VALUES ('$id','$name','$email','$password')";
}
if(!mysqli_query($connect,$sql)){
    die("Erro no query");
}else{

    mysqli_close($connect);

}

?>