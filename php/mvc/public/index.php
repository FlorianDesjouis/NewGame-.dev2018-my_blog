<?php
header('Location: ../view/index_home.php');
require_once "../controller/Articles/ControllerArticles.php";
if (isset($_GET['action'])) {

    if ($_GET['action'] == 'article') {
        if (isset($_GET['id'])) {
            $id = intval($_GET['id']);
            if ($id != 0) {
                $database = new controllerArticle();
                $database->getAllArticle();
            }
            else
                throw new Exception("Identifiant de billet non valide");
        }
        else
            throw new Exception("Identifiant de billet non défini");
    }
    else
        throw new Exception("Action non valide");
}
else {
    $database = new controllerArticle();
    $database->getAllArticle();
}