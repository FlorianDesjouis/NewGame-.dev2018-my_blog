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
    <link href="../css/reset.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <script src="../js/jquery-2.2.0.min.js"></script>
    <script src="../js/jquery-ui.min.js"></script>
    <script src="../controller/Users/loginScript.js"></script>
    <script src="../js/script.js"></script>
    <title>New game+</title>
</head>
<body>
<div class="mainConteiner">
    <header class="header">
        <div class="blockLogo"><img src="../asset/img/logo_blog.png" alt="logo_blog"></div>
        <a href="#" class="headerIcon"></a>
        <a href="#" class="hideIcon">
            <hr id="croix1">
            <hr id="croix2">
        </a>
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
            E-mail : <input type="email" name="userEmail" id="userEmail"><label for="userEmail"></label><br>
            Password : <input type="password" name="userPassword" id="userPassword"><label
                for="userPassword"></label><br>
            <input type="submit" value="Login">
        </form>
    </header>
    <div class="blockLogin">
        <form class="loginForm">
            Merci de vous connecter :<br><br>
            E-mail : <input type="email" name="userEmail" id="userEmail" class="fieldLogin"><label for="userEmail"></label><br>
            Password : <input type="password" name="userPassword" id="userPassword" class="fieldLogin"><label
                for="userPassword"></label><br>
            <input type="submit" value="Login" class="fieldLogin">
        </form>
    </div>
    <footer class="footer">
        2016 © New game+ - Tous droits reservés
    </footer>
</div>
</body>
</html>
