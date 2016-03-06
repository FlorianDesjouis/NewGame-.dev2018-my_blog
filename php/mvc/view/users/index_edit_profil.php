<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale= 1.0, minimum-scale= 0.20">
    <link href="css/reset.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="js/jquery-2.2.0.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="Users/editProfilController.php"></script>
    <script src="js/script.js"></script>
    <script src="js/optional_plugin_slide.js"></script>
    <script src="js/checkPosition.js"></script>
    <title>New game+ - Edit Profil</title>
    <script>
        $(function(){
            $('#header').myPlugin({time:1000});
        });
    </script>
</head>
<body>
<div class="mainConteiner" role="main">
    <header class="header">
        <div class="blockLogo"><img src="asset/img/logo_blog.png" alt="logo_blog"></div>
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
    <div class="blockEditProfil">
        <form method="post" action="../../controller/Users/editProfilController.php" class="editProfilForm">
            Votre pseudo <br><input type="text" name="pseudo" placeholder="Pseudo" class="editProfilField"><br><br>
            Votre prénom <br><input type="text" name="firstName" placeholder="Prénom" class="editProfilField"><br><br>
            Votre nom <br><input type="text" name="lastName" placeholder="Nom" class="editProfilField"><br><br>
            Votre adresse mail <br><input type="email" name="email" placeholder="E-mail" class="editProfilField"><br><br>
            Votre mot de passe <br><input type="password" name="password" placeholder="Mot de passe" class="editProfilField"><br><br>
            <input type="submit" value="Envoyer" class="editProfilField">
        </form>
    </div>
    <footer class="footer">
        2016 © New game+ - Tous droits reservés
    </footer>
</div>
</body>
<a href="#header"><img src="../public/asset/img/logo_blog.png" id="toTheTop" alt="toTheTop button"></a>
</html>
