<?php

class UserModel {
    public static function loginUser($pdo ,$userEmail, $userPassword){
        $dataBase = $pdo->prepare('SELECT * FROM users WHERE email = :email AND password = :password');
        $dataBase ->bindParam('email', $userEmail);
        $dataBase ->bindParam('password', $userPassword);
        $dataBase ->execute();
    }

    public static function registreUser($pdo, $userLogin, $userEmail, $userPassword){
        $dataBase = $pdo->prepare('INSERT INTO `users`(login, password, email) VALUES (:login, :password, :email)');
        $dataBase ->bindParam('login', $userLogin);
        $dataBase ->bindParam('email', $userEmail);
        $dataBase ->bindParam('password', $userPassword);
        $dataBase ->execute();
}

    public static function editUser($pdo, $userLogin, $userEmail, $userPassword){
        $dataBase = $pdo->prepare('UPDATE `users` SET `login` = :login, `email` = :email, `password` = :password');
        $dataBase ->bindParam('login', $userLogin);
        $dataBase ->bindParam('email', $userEmail);
        $dataBase ->bindParam('password', $userPassword);
        $dataBase ->execute();
    }

    public static function deleteUser($pdo, $id){
        $dataBase = $pdo->prepare("DELETE FROM `user` WHERE `id` = :id");
        $dataBase->bindParam('id',$id);
        $dataBase->execute();
    }

}
