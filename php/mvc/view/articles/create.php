<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale= 1.0, minimum-scale= 0.20">
    <link href="../../public/css/reset.css" rel="stylesheet">
    <link href="../../public/css/style.css" rel="stylesheet">
    <script src="../../public/js/jquery-2.2.0.min.js"></script>
    <script src="../../public/js/script.js"></script>
    <title>New game+</title>
</head>
<body>
<div class="mainConteiner">
    <header class="header">
        <div class="blockLogo"><img src="../../public/asset/img/logo_blog.png" alt="logo_blog"></div>
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
    <div class="blockCreate">
        <form method="post" action="articles/create" class="createForm">
            <input type="text" name="title" placeholder="Titre de l'article" class="fieldCreate"><br><br>
            <textarea name="content" placeholder="Contenu de l'article" class="fieldCreate"></textarea><br>
            <input type="button" value="Choisissez un fichier" class="fieldCreate">&nbsp;&nbsp;
            Date du jour : <?= date("d.m.Y") ?><br><br>
            <input type="button" value="Envoyer" class="fieldCreate">
        </form>
    </div>
    <footer class="footer">
        2016 © New game+ - Tous droits reservés
    </footer>
</div>
</body>
</html>
