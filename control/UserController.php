<?php
include '../model/User.php';

class UserController {
    function  findAll(){
        $user = new User();
        return $user->findAll();
    }
}
?>