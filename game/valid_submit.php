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

// Modification de la structure de la table pour définir 'valid_joueur_id' comme AUTO_INCREMENT
$mabd->query("ALTER TABLE valid_joueurs MODIFY COLUMN valid_joueur_id INT AUTO_INCREMENT");

$pseudo = ucfirst($_POST['new_pseudo']);
$temps = $_POST['temps'];

$req = "INSERT INTO valid_joueurs (valid_joueur_pseudo, valid_joueur_temps) VALUES ('$pseudo', '$temps')";

echo '<h1>Ajout d\'un nouveau joueur</h1>';
echo '<div class="valid_ajout">';
echo 'Vous avez soumis votre temps : <br>';
echo 'Pseudo : '.$pseudo. '<br>' ;
echo 'Temps : '.$temps. '<br>';
echo 'Votre temps sera vérifié et affiché avec sa place et un commentaire dans les plus brefs délais.<br>';
echo '</div>';

$resultat = $mabd->query($req);
?>
</body>
</html>
