<?php

require_once "../model/Articles/ModelArticle.php";
class controllerArticle {


    public function createArticle(){

        if(isset($_POST['title']) && isset($_POST['content'])){

            $model = new modelArticle();
            $model->NewArticle($_POST['title'], $_POST['content'], date('Y.m.d'));

        }else{
            require_once "../../view/Articles/create.php";
        };

    }
    public function readArticle($id){

        if(isset($id)){
            require_once "../../view/Articles/read.php";
            echo 'aezdzeofpjzef';
        }

    }
    public function updateArticle (){

        if(isset($_POST['title']) && isset($_POST['content'])){

            $model = new modelArticle();
            $model->updateArticle($_POST['title'], $_POST['content'], date('Y.m.d'));
        }else{

            require_once "../../view/Articles/update.php";
        }
    }
    public function deleteArticle(){

        $model = new modelArticle();
        $model->deleteArticle($_POST['title'], $_POST['content'], date('Y.m.d'));
    }
    public function getAllArticle(){
        $model = new modelArticle();
        $model->getAllArticle();
    }
}