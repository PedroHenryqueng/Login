<?php

if(isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['password']) && !empty($_POST['password'])){

    require'conexao.php';
    require'Usuario.class.php';

    $u = new Usuario();

    $username =addslashes($_POST['username']);
    $password =addslashes($_POST['password']);



}else{

    header("Location: login.html");


}



