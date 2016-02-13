<?php

class controllerArticle {

    public function createArticle(){

        if(isset($_POST['title']) && isset($_POST['content'])){

            require_once "../../model/articles/modelArticle.php";
            $model = new modelArticle();
            $model->NewArticle($_POST['title'], $_POST['content'], date('Y.m.d'));

        }else{
            require_once "../../view/articles/create.php";
        };

    }
    public function readArticle($id){

        if(isset($id)){
            require_once "../../view/articles/read.php";
        }

    }
    public function updateArticle (){

        if(isset($_POST['title']) && isset($_POST['content'])){

            require_once "../../model/articles/modelArticle.php";
            $model = new modelArticle();
            $model->UpdateArticle($_POST['title'], $_POST['content'], date('Y.m.d'));
        }else{

            require_once "../../view/articles/update.php";
        }
    }

}