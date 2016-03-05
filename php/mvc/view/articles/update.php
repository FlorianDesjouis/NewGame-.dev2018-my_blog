<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale= 1.0, minimum-scale= 0.20">
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
    <form method="post" action="/articles/update" class="form">
        <div class="titleSize">Formulaire de modification d'article</div>
        <input type="text" name="title" placeholder="<?= "Afficher titre article" ?>" class="titleSize marginForm"><br><br>
        <textarea name="content" class="textArea marginForm" id="content"><?= "Afficher contenu article" ?></textarea><label for="content"></label> <br>
        <input type="button" value="Choisissez un fichier" class="marginForm">
        <div class="dateSize marginForm"> Date du jour : <?= date("d.m.y") ?></div><br><br>
        <input type="button" value="Envoyer" class="Send">
    </form>
    <footer class="footer">
        2016 © New game+ - Tous droits reservés
    </footer>
</div>
</body>
</html>