<?php
    class Usuario{

    public function login($username, $password){
        global $pdo;

        $sql = "SELECT * FROM usuario WHERE username = :username AND password = :password";
        $sql = $pdo->prepare($sql);
        $sql->bindValue("username",$username);
        $sql->bindValue("password",$password);
        $sql->execute();

        
    }

    }
