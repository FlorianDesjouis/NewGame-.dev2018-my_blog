<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Nouvel Article</title>
</head>
<body>
    <form method="post" action="articles/update">
        <input type="text" name="title" placeholder="Titre de l'article"><br><br>
        <textarea name="content"  placeholder="Contenu de l'article"></textarea><br>
        <input type="button" value="Choisissez un fichier">&nbsp;&nbsp;
        Date du jour : <?= date("d.m.y") ?><br><br>
<input type="button" value="Envoyer">
</form>
</body>
</html>