<?php

class controllerArticle {

    public function createArticle(){

        if(isset($_POST['title']) && isset($_POST['content'])){

            require "../../model/articles/modelArticle.php";
            $model = new modelArticle();
            $model->NewArticle($_POST['title'], $_POST['content'], date('y.m.d'));

        };


    }
    public function readArticle(){


    }
    public function updateArticle (){

        if(isset($_POST['title']) && isset($_POST['content'])){

            require "../../articles/modelArticle.php";
            $model = new modelArticle();
            $model->UpdatetArticle($_POST['title'], $_POST['content'], date('y.m.d'));
        }
    }

}