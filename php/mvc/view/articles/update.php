<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale= 1.0, minimum-scale= 0.20">
    <link href="../../public/css/reset.css" rel="stylesheet">
    <link href="../../public/css/style.css" rel="stylesheet">
    <script src="../../public/js/jquery-2.2.0.min.js"></script>
    <script src="../../public/js/script.js"></script>
    <title>Modification d'article</title>
</head>
<body>
<div class="mainConteiner" role="main">
    <header class="header">
        <div class="blockLogo"><img src="../../public/asset/img/logo_blog.png" alt="logo_blog"></div>
        <a href="#" class="headerIcon" id="headerIcon"></a>
        <nav class="menu">
            <a href="#">Acceuil</a>
            <a href="#">Image</a>
            <a href="#">Profil</a>
            <a href="#">Connexion</a>
        </nav>
        <div class="desktopMenu">
            <a href="#">Accueil</a>
            <a href="#">Image</a>
            <a href="#">Profil</a>
            <a href="#">Connexion</a>
        </div>
    </header>
    <form method="post" class="form" action="articles/create">
        <div class="createArticle">Modifier l'article</div>
        <input class="marginForm titleSize" type="text" name="title" placeholder="<?="Afficher titre article"?>"><br><br>
        <textarea class="marginForm textArea" name="content"  ><?="Afficher contenu article"?></textarea><br>
        <input class="marginForm field" type="button" value="Choisissez un fichier">&nbsp;&nbsp;
        <div class="marginForm dateSize">Date du jour : <?= date("d.m.Y") ?></div><br><br>
        <input class="marginForm field" type="button" value="Envoyer">
    </form>
</div>
<footer class="footer">
    2016 © New game+ - Tous droits reservés
</footer>
</body>
</html>