<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../menu.css" type="text/css">
    <title>Ajouter un joueur</title>
</head>
<body>
    <h1>Ajouter un joueur</h1>

    <?php
include ('../secret.php');
?>
<div id="formulaire">
<form method="post" action="valid_ajout.php" enctype="multipart/form-data">
        <label for="new_place">Place :</label>
        <input type="text" name="new_place" id="new_place" required><br>

        <label for="new_pseudo">Pseudo :</label>
        <input type="text" name="new_pseudo" id="new_pseudo" required><br>

        <label for="temps">Temps : </label>
        <input type="number" name="temps" id="temps" required><br>

        <label for="commentaire">Commentaire : </label>
        <input type="text" name="commentaire" id="commentaire" required><br>

        <button id="bouton" type="submit">Ajouter</button>
</form>
</div>
<br>
<a href="backoffice.php"><button id="bouton">Retour</button></a>