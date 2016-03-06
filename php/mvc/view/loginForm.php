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
    <script src="../public/js/optional_plugin_slide.js"></script>
    <script src="../public/js/checkPosition.js"></script>
    <title>New game+</title>
    <script>
        $(function(){
            $('header').myPlugin({time:1000});
        });
    </script>
</head>
<body>
<header class="header" id="header">
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
        E-mail : <input type="email" name="userEmail" id="userEmail"><label for="userEmail"></label><br>
        Password : <input type="password" name="userPassword" id="userPassword"><label for="userPassword"></label><br>
        <input type="submit" value="Login">
    </form>
</header>
</body>
<a href="#header"><img src="../public/asset/img/logo_blog.png" id="toTheTop" alt="toTheTop button"></a>
</html>
