<?php
    require_once("../config/config.php");
class modelArticle{
    public function createArticle($titre, $article, $date){
        global $pdo;
        $database = $pdo->prepare("INSERT_INTO `articles`(titre, article, date) VALUES (:titre, :article, :date)");
        $database->bindParam('titre',$titre);
        $database->bindParam('article',$article);
        $database->bindParam('date',$date);
        $database->execute();
    }

    public function readArticle($id){
        global $pdo;
        $database = $pdo->prepare("SELECT * FROM `articles` WHERE `id` = :id");
        $database->bindParam("id",$id);
        $database->execute();
        return $database->fetch();
    }
    public function updateArticle($titre, $article, $date){
        global $pdo;
        $database = $pdo->prepare("UPDATE `articles` SET `titre` = :titre, `article` = :article, `date` = :date");
        $database->bindParam('titre',$titre);
        $database->bindParam('article',$article);
        $database->bindParam('date',$date);
        $database->execute();
    }
    public function deleteArticle($id){
        global $pdo;
        $database = $pdo->prepare("DELETE FROM `articles` WHERE `id` = :id");
        $database->bindParam('id',$id);
        $database->execute();
    }
    public function  getAllArticle(){
        global $pdo;
        $database = $pdo->query("SELECT * FROM `articles`");
        return $database;
    }
}
