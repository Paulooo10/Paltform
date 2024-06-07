<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../menu.css" type="text/css">
    <title>Ajouter un joueur</title>
</head>
<body>
<?php
include('../secret.php');

$mabd = new PDO('mysql:host='.HOST.';dbname='.DBNAME.';charset=UTF8;', USER, PASSWORD);
$mabd->query('SET NAMES utf8;');

// Modification de la structure de la table pour définir 'joueur_id' comme AUTO_INCREMENT
$mabd->query("ALTER TABLE joueurs MODIFY COLUMN joueur_id INT AUTO_INCREMENT");

$pseudo = $_POST['new_pseudo'];
$place = ucfirst($_POST['new_place']);
$temps = $_POST['temps'];
$commentaire = $_POST['commentaire'];

$req = "INSERT INTO joueurs (joueur_pseudo, joueur_place, joueur_temps, joueur_commentaire) VALUES ('$pseudo', '$place', '$temps', '$commentaire')";

echo '<h1>Ajout d\'un nouveau joueur</h1>';
echo '<div class="valid_ajout">';
echo 'Vous avez ajouté un nouveau joueur : <br>';
echo 'Pseudo : '.$pseudo. '<br>' ;
echo 'Place : '.$place. '<br>' ;
echo 'Temps : '.$temps. '<br>';
echo 'Commentaire : '.$commentaire. '<br>' ;
echo '</div>';

$resultat = $mabd->query($req);
?>
</body>
</html>
