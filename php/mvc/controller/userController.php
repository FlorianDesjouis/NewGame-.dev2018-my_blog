<?php
if(isset($_POST['login'])){
    $login = $_POST ['login'];
}else{
    $login = null;
}

class UserController{
    public function formAction(){
        $view = include("../view/loginForm.php");
        return $view;
    }
    public function postAction(){
        if(isset($_POST['login'])){
            return json_encode(true);
        }else{
            return json_encode(false);
        }
    }
    public function registerAction(){

    }
}