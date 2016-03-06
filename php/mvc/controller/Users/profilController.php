<?php
/**
 * Created by PhpStorm.
 * User: Wrex
 * Date: 06/03/2016
 * Time: 10:47
 */
session_start();
if(isset($_POST['logout'])){
    unset($_SESSION['users']);
}
if(isset($_SESSION['users'])){
    header("Location: /");
    exit;
}
$errormessage = null;
if(isset($_POST['login'])){
    global $pdo;
    $stmt = $pdo->prepare("SELECT * FROM users
                          WHERE login = :login"
    );
    $stmt->bindParam("login",$_POST['login']);
    $stmt->execute();
    $result = $stmt->fetch();
    if($result === false){
        $errormessage = "Wrong login";
    }elseif (empty($_POST["password"])) {
        $errormessage = "No password";
    }elseif (sha1($_POST["password"]) != $result["password"]) {
        $errormessage = "Wrong password";
    }else{
        $_SESSION['users'] = $result["login"];
        header("Location: /");
        exit;
    }
    include '../index_login.php';
}