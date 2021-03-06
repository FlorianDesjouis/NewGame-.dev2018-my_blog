<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale= 1.0, minimum-scale= 0.20">
    <link href="css/reset.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="js/jquery-2.2.0.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/optional_plugin_slide.js"></script>
    <script src="js/checkPosition.js"></script>
    <title>New game+</title>
    <script>
        $(function(){
            $('#header').myPlugin({time:1000});
        });
    </script>
</head>
<body>
<div class="mainConteiner" role="main">
    <header class="header" id="header">
        <div class="blockLogo"><img src="asset/img/logo_blog.png" alt="logo_blog"></div>
        <a href="#" class="headerIcon" id="headerIcon"></a>
        <nav class="menu">
            <a href="#">Accueil</a>
            <a href="#">Image</a>
            <a href="index_login.php">Profil</a>
            <a href="index_registration.php">Connexion</a>
        </nav>
        <div class="desktopMenu">
            <a href="#">Accueil</a>
            <a href="#">Image</a>
            <a href="users/index_login.php">Profil</a>
            <a href="users/index_registration.php">Connexion</a>
        </div>
        <form class="login">
            E-mail : <input type="email" name="userEmail" id="userEmail"><label for="userEmail"></label><br>
            Password : <input type="password" name="userPassword" id="userPassword"><label for="userPassword"></label><br>
            <input type="submit" value="Login">
        </form>
    </header>
    <section class="section">
        <a href="./articles/read.php">
            <article class="article">
                <h2 class="title">Salut</h2>
                <p class="blockText">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam consectetur scelerisque egestas. Aliquam
                    elit sapien, mollis in mattis sit amet, pharetra at lorem. Sed placerat ac magna eget vulputate. Sed varius
                    volutpat arcu sed maximus. Aenean fringilla efficitur justo, eget dictum nunc. Maecenas at mattis augue.
                    Quisque sed ligula non quam dictum ornare. Morbi placerat tellus id eros aliquam interdum. Aenean lobortis
                    justo a neque sodales, vel aliquet magna euismod. Integer placerat porta nisl, eget finibus tortor accumsan
                    eu. Quisque sit amet velit ultricies, ornare lectus ac, faucibus felis. Sed eget nisi ultricies, tristique
                    enim eu, aliquet est. Nullam malesuada vehicula porttitor. Nunc pretium magna eget congue dapibus. Praesent
                    nibh diam, malesuada mattis dignissim at, accumsan ut nulla.

                    Aliquam ante magna, pharetra in eros vel, feugiat vulputate nisl. Aliquam convallis neque ac velit euismod
                    efficitur. Praesent malesuada metus quis ex consectetur dictum. Nam consectetur nunc nec suscipit euismod.
                    Mauris sit amet quam commodo, efficitur sem vel, molestie lorem. Morbi tellus nisl, auctor a nisl eu,
                    eleifend malesuada sem. Vivamus justo dolor, finibus efficitur est et, tincidunt sollicitudin tellus.
                </p>
            </article>
        </a>
        <a href="./articles/read.php">
            <article class="article">
                <h2 class="title">Salut</h2>
                <p class="blockText">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam consectetur scelerisque egestas. Aliquam
                    elit sapien, mollis in mattis sit amet, pharetra at lorem. Sed placerat ac magna eget vulputate. Sed varius
                    volutpat arcu sed maximus. Aenean fringilla efficitur justo, eget dictum nunc. Maecenas at mattis augue.
                    Quisque sed ligula non quam dictum ornare. Morbi placerat tellus id eros aliquam interdum. Aenean lobortis
                    justo a neque sodales, vel aliquet magna euismod. Integer placerat porta nisl, eget finibus tortor accumsan
                    eu. Quisque sit amet velit ultricies, ornare lectus ac, faucibus felis. Sed eget nisi ultricies, tristique
                    enim eu, aliquet est. Nullam malesuada vehicula porttitor. Nunc pretium magna eget congue dapibus. Praesent
                    nibh diam, malesuada mattis dignissim at, accumsan ut nulla.

                    Aliquam ante magna, pharetra in eros vel, feugiat vulputate nisl. Aliquam convallis neque ac velit euismod
                    efficitur. Praesent malesuada metus quis ex consectetur dictum. Nam consectetur nunc nec suscipit euismod.
                    Mauris sit amet quam commodo, efficitur sem vel, molestie lorem. Morbi tellus nisl, auctor a nisl eu,
                    eleifend malesuada sem. Vivamus justo dolor, finibus efficitur est et, tincidunt sollicitudin tellus.
                </p>
            </article>
        </a>
        <a href="./articles/read.php">
            <article class="article">
                <h2 class="title">Salut</h2>
                <p class="blockText">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam consectetur scelerisque egestas. Aliquam
                    elit sapien, mollis in mattis sit amet, pharetra at lorem. Sed placerat ac magna eget vulputate. Sed varius
                    volutpat arcu sed maximus. Aenean fringilla efficitur justo, eget dictum nunc. Maecenas at mattis augue.
                    Quisque sed ligula non quam dictum ornare. Morbi placerat tellus id eros aliquam interdum. Aenean lobortis
                    justo a neque sodales, vel aliquet magna euismod. Integer placerat porta nisl, eget finibus tortor accumsan
                    eu. Quisque sit amet velit ultricies, ornare lectus ac, faucibus felis. Sed eget nisi ultricies, tristique
                    enim eu, aliquet est. Nullam malesuada vehicula porttitor. Nunc pretium magna eget congue dapibus. Praesent
                    nibh diam, malesuada mattis dignissim at, accumsan ut nulla.

                    Aliquam ante magna, pharetra in eros vel, feugiat vulputate nisl. Aliquam convallis neque ac velit euismod
                    efficitur. Praesent malesuada metus quis ex consectetur dictum. Nam consectetur nunc nec suscipit euismod.
                    Mauris sit amet quam commodo, efficitur sem vel, molestie lorem. Morbi tellus nisl, auctor a nisl eu,
                    eleifend malesuada sem. Vivamus justo dolor, finibus efficitur est et, tincidunt sollicitudin tellus.
                </p>
            </article>
        </a>
        <a href="./articles/read.php">
            <article class="article">
                <h2 class="title">Salut</h2>
                <p class="blockText">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam consectetur scelerisque egestas. Aliquam
                    elit sapien, mollis in mattis sit amet, pharetra at lorem. Sed placerat ac magna eget vulputate. Sed varius
                    volutpat arcu sed maximus. Aenean fringilla efficitur justo, eget dictum nunc. Maecenas at mattis augue.
                    Quisque sed ligula non quam dictum ornare. Morbi placerat tellus id eros aliquam interdum. Aenean lobortis
                    justo a neque sodales, vel aliquet magna euismod. Integer placerat porta nisl, eget finibus tortor accumsan
                    eu. Quisque sit amet velit ultricies, ornare lectus ac, faucibus felis. Sed eget nisi ultricies, tristique
                    enim eu, aliquet est. Nullam malesuada vehicula porttitor. Nunc pretium magna eget congue dapibus. Praesent
                    nibh diam, malesuada mattis dignissim at, accumsan ut nulla.

                    Aliquam ante magna, pharetra in eros vel, feugiat vulputate nisl. Aliquam convallis neque ac velit euismod
                    efficitur. Praesent malesuada metus quis ex consectetur dictum. Nam consectetur nunc nec suscipit euismod.
                    Mauris sit amet quam commodo, efficitur sem vel, molestie lorem. Morbi tellus nisl, auctor a nisl eu,
                    eleifend malesuada sem. Vivamus justo dolor, finibus efficitur est et, tincidunt sollicitudin tellus.
                </p>
            </article>
        </a>
        <a href="./articles/read.php">
            <article class="article">
                <h2 class="title">Salut</h2>
                <p class="blockText">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam consectetur scelerisque egestas. Aliquam
                    elit sapien, mollis in mattis sit amet, pharetra at lorem. Sed placerat ac magna eget vulputate. Sed varius
                    volutpat arcu sed maximus. Aenean fringilla efficitur justo, eget dictum nunc. Maecenas at mattis augue.
                    Quisque sed ligula non quam dictum ornare. Morbi placerat tellus id eros aliquam interdum. Aenean lobortis
                    justo a neque sodales, vel aliquet magna euismod. Integer placerat porta nisl, eget finibus tortor accumsan
                    eu. Quisque sit amet velit ultricies, ornare lectus ac, faucibus felis. Sed eget nisi ultricies, tristique
                    enim eu, aliquet est. Nullam malesuada vehicula porttitor. Nunc pretium magna eget congue dapibus. Praesent
                    nibh diam, malesuada mattis dignissim at, accumsan ut nulla.

                    Aliquam ante magna, pharetra in eros vel, feugiat vulputate nisl. Aliquam convallis neque ac velit euismod
                    efficitur. Praesent malesuada metus quis ex consectetur dictum. Nam consectetur nunc nec suscipit euismod.
                    Mauris sit amet quam commodo, efficitur sem vel, molestie lorem. Morbi tellus nisl, auctor a nisl eu,
                    eleifend malesuada sem. Vivamus justo dolor, finibus efficitur est et, tincidunt sollicitudin tellus.
                </p>
            </article>
        </a>
    </section>
    <footer class="footer">
        2016 © New game+ - Tous droits reservés
    </footer>
</div>
<a href="#header"><img src="asset/img/logo_blog.png" id="toTheTop" alt="toTheTop button"></a>
</body>
</html>
