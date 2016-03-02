<?php

require_once("configdb.php");

class modelArticle{
    public function createArticle($titre, $post, $date){
        global $pdo;
        $database = $pdo->prepare("INSERT_INTO `posts`(titre, article, date) VALUES (:titre, :post, :date)");
        $database->bindParam('titre',$titre);
        $database->bindParam('post',$post);
        $database->bindParam('date',$date);
        $database->execute();
    }

    public function readArticle($id){
        global $pdo;
        $database = $pdo->prepare("SELECT * FROM `posts` WHERE `id` = :id");
        $database->bindParam("id",$id);
        $database->execute();
        return $database->fetch();
    }
    public function updateArticle($titre, $post, $date){
        global $pdo;
        $database = $pdo->prepare("UPDATE `posts` SET `titre` = :titre, `post` = :post, `date` = :date");
        $database->bindParam('titre',$titre);
        $database->bindParam('post',$post);
        $database->bindParam('date',$date);
        $database->execute();
    }
    public function deleteArticle($id){
        global $pdo;
        $database = $pdo->prepare("DELETE FROM `posts` WHERE `id` = :id");
        $database->bindParam('id',$id);
        $database->execute();
    }
    public function  getAllArticle(){
        global $pdo;
        $database = $pdo->query("SELECT * FROM `posts`");
        return $database;
    }
}
