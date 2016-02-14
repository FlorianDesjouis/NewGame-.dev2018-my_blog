<?php
require_once ('../config/dbconf.php');

class UserModel {
    protected function loginUser($userLogin ,$userEmail, $userPassword){
        global $pdo;
        $dataBase = $pdo->prepare('SELECT * FROM `users` WHERE `login` = :login, `email` = :email, `password` = :password');
        $dataBase ->bindParam('login', $userLogin);
        $dataBase ->bindParam('email', $userEmail);
        $dataBase ->bindParam('password', $userPassword);
        $dataBase ->execute();
    }

    protected function registreUser($userLogin, $userEmail, $userPassword){
        global $pdo;
        $dataBase = $pdo->prepare('INSERT_INTO `users`(login, password, email) VALUES (:login, :password, :email)');
        $dataBase ->bindParam('login', $userLogin);
        $dataBase ->bindParam('email', $userEmail);
        $dataBase ->bindParam('password', $userPassword);
        $dataBase ->execute();
}

    protected  function editUser($userLogin, $userEmail, $userPassword){
        global $pdo;
        $dataBase = $pdo->prepare('UPDATE `users` SET `login` = :login, `email` = :email, `password` = :password');
        $dataBase ->bindParam('login', $userLogin);
        $dataBase ->bindParam('email', $userEmail);
        $dataBase ->bindParam('password', $userPassword);
        $dataBase ->execute();
    }

    protected function deleteUser($id){
        global $pdo;
        $dataBase = $pdo->prepare("DELETE FROM `user` WHERE `id` = :id");
        $dataBase->bindParam('id',$id);
        $dataBase->execute();
    }

}
