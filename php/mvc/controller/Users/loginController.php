<?php

class UserController extends AbstractController
{
    public function connexionAction()
    {
        if (!isset($_POST['userMail']) && !isset($_POST['userPassword']))
            return json_encode(["error" => "userEmail or userPassword missing"]);
        $userPassword = strip_tags($_POST['userPassword']);
        $userPassword = htmlentities($userPassword);
        $userPassword = trim($userPassword);
        sha1($userPassword);
        $userEmail = strip_tags($_POST['userEmail']);
        $userEmail = htmlentities($userEmail);
        $userEmail = trim($userEmail);
        $user = UserModel::loginUser($this->pdo, $userEmail, $userPassword);
        return json_encode(["message" => "Connecté !",
            "userEmail" => $userEmail,
            "userPassword" => $userPassword
        ]);
    }
}