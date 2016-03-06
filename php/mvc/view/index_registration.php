<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale= 1.0, minimum-scale= 0.20">
    <link href="../public/css/reset.css" rel="stylesheet">
    <link href="../public/css/style.css" rel="stylesheet">
    <script src="../public/js/jquery-2.2.0.min.js"></script>
    <script src="../public/js/script.js"></script>
    <script src="../public/js/optional_plugin_slide.js"></script>
    <script src="../public/js/checkPosition.js"></script>
    <title>New game+ - inscription</title>
    <script>
        $(function(){
            $('#header').myPlugin({time:1000});
        });
    </script>
</head>
<body>
<div class="mainConteiner" role="main">
    <header class="header" id="header">
        <div class="blockLogo"><img src="../public/asset/img/logo_blog.png" alt="logo_blog"></div>
        <a href="#" class="headerIcon"></a>
        <a href="#" class="hideIcon">
            <hr id="croix1">
            <hr id="croix2">
        </a>
        <nav class="menu">
            <a href="index_home.php">Accueil</a>
            <a href="#">Image</a>
            <a href="index_login.php">Profil</a>
            <a href="index_registration.php">Connexion</a>
        </nav>
        <div class="desktopMenu">
            <a href="index_home.php">Accueil</a>
            <a href="#">Image</a>
            <a href="index_login.php">Profil</a>
            <a href="index_registration.php">Connexion</a>
        </div>
        <form class="login">
            E-mail : <input type="email" name="userEmail" id="userEmail"><label for="userEmail"></label><br>
            Password : <input type="password" name="userPassword" id="userPassword"><label
                for="userPassword"></label><br>
            <input type="submit" value="Login">
        </form>
    </header>
    <div class="blockForm">
        <form method="post" action="#" class="registerForm">
            Votre pseudo <br><input type="text" name="pseudo" placeholder="Pseudo" class="field"><br><br>
            Votre prénom <br><input type="text" name="firstname" placeholder="Prénom" class="field"><br><br>
            Votre nom <br><input type="text" name="lastname" placeholder="Nom" class="field"><br><br>
            Votre adresse mail <br><input type="email" name="email" placeholder="E-mail" class="field"><br><br>
            Vérification e-mail <br><input type="email" name="check-email" placeholder="Verif. e-mail"
                                           class="field"><br><br>
            Votre mot de passe <br><input type="password" name="password" placeholder="Mot de passe"
                                          class="field"><br><br>
            Vérification mot de passe <br><input type="password" name="check-password"
                                                 placeholder="Vérif. mot de passe" class="field"><br><br>
            <input type="submit" value="Envoyer" class="field">
        </form>
    </div>
    <footer class="footer">
        2016 © New game+ - Tous droits reservés
    </footer>
</div>
<a href="#header"><img src="../public/asset/img/logo_blog.png" id="toTheTop" alt="toTheTop button"></a>
</body>
</html>
