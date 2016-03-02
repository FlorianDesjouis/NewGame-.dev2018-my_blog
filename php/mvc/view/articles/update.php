<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Modifier Article</title>
</head>
<body>
    <form method="post" action="/articles/update">
        <input type="text" name="title" placeholder="<?="Afficher titre article"?>"><br><br>
        <textarea name="content"><?="Afficher contenu article"?></textarea><br>
        <input type="button" value="Choisissez un fichier">&nbsp;&nbsp;
        Date du jour : <?= date("d.m.y") ?><br><br>
<input type="button" value="Envoyer">
</form>
</body>
</html>