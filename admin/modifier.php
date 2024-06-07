<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../menu.css" type="text/css">
    <title>Modifier un joueur</title>
</head>
<body>
    <h1>Modifier un joueur</h1>
<?php
include ('../secret.php');
$num=$_GET['joueur_id'];
$mabd = new PDO('mysql:host='.HOST.';dbname='.DBNAME.';charset=UTF8;', USER, PASSWORD);
$mabd->query('SET NAMES utf8;');
$req = $mabd->prepare("SELECT * FROM joueurs WHERE joueur_id = :id");
$req->bindParam(':id', $num);
$req->execute();
$skieur = $req->fetch(PDO::FETCH_ASSOC);
?>
<div id="formulaire">
<form method="post" action="valid_modif.php?joueur_id=<?php echo $num; ?>" enctype="multipart/form-data">
        <label for="new_place">Nouvelle place :</label>
        <input type="text" name="new_place" id="new_place" value="<?php echo $skieur['joueur_place']; ?>" required><br>

        <label for="new_pseudo">Nouveau pseudo :</label>
        <input type="text" name="new_pseudo" id="new_pseudo" value="<?php echo $skieur['joueur_pseudo']; ?>" required><br>

        <label for="temps">Nouveau temps : </label>
        <input type="number" name="temps" id="temps" value="<?php echo $skieur['joueur_temps']; ?>" required><br>

        <label for="commentaire">Nouveau commentaire : </label>
        <input type="text" name="commentaire" id="commentaire" value="<?php echo $skieur['joueur_commentaire']; ?>" required><br>

        <button id="bouton" type="submit">Modifier</button>
</form>
</div>
<br>
<a href="backoffice.php"><button id="bouton">Retour</button></a>

</body>