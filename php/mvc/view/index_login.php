<?php
/**
 * Created by PhpStorm.
 * User: Wrex
 * Date: 06/02/2016
 * Time: 13:54
 */

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale= 1.0, minimum-scale= 0.20">
    <link href="../public/css/reset.css" rel="stylesheet">
    <link href="../public/css/style.css" rel="stylesheet">
    <script src="../public/js/jquery-2.2.0.min.js"></script>
    <script src="../public/js/jquery-ui.min.js"></script>
    <script src="../public/js/script.js"></script>
    <title>New game+</title>
</head>
<body>
<div class="mainConteiner">
    <header class="header">
        <div class="blockLogo"><img src="../public/asset/img/logo_blog.png" alt="logo_blog"></div>
        <a href="#" class="headerIcon" id="headerIcon"></a>
        <nav class="menu">
            <a href="#">Accueil</a>
            <a href="#">Article</a>
            <a href="#">Image</a>
            <a href="#">Connexion</a>
        </nav>
        <div class="desktopMenu">
            <a href="#">Accueil</a>
            <a href="#">Image</a>
            <a href="#">Profil</a>
            <a href="#">Connexion</a></div>
        <form class="login">
            <label for="userEmail">E-mail :</label><br>
            <input type="email" name="userEmail" id="userEmail" placeholder="Adresse Mail">
            <label for="userPassword">Password : </label><br>
            <input type="password" name="userPassword" id="userPassword" placeholder="Mot de Passe">
            <input type="submit" value="Login">
        </form>
    </header>
    <div class="blockLogin">
        <form class="loginForm">
            Merci de vous connecter :<br><br>
            <label for="userEmail">E-mail : </label><br>
            <input type="email" name="userEmail" id="userEmail" class="fieldLogin" placeholder="Adresse Mail"><br>
            <label for="userPassword">Password : </label><br>
            <input type="password" name="userPassword" id="userPassword" class="fieldLogin" placeholder="Mot de Passe"><br>
            <input type="submit" value="Login" class="fieldLogin">
        </form>
    </div>
    <footer class="footer">
        2016 © New game+ - Tous droits reservés
    </footer>
</div>
</body>
</html>
