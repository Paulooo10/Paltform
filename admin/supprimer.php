<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../menu.css" type="text/css">
    <title>Attention</title>
</head>
<body>
    <?php
    
    // Vérifier si l'ID du skieur est passé dans l'URL
        $num = $_GET['joueur_id'];
        include('../secret.php');
        $mabd = new PDO('mysql:host='.HOST.';dbname='.DBNAME.';charset=UTF8;', USER, PASSWORD);
    ?>
    <h1>Attention !</h1>
    <?php 
    echo "<h2>Vous êtes sur le point de supprimer le joueur  $num ! Voulez-vous continuer ?</h2>";
    
    ?>
<a href="valid_suppression.php?joueur_id=<?php echo $num; ?>"><button id="bouton">Confirmer</button></a>    
<a href="backoffice.php"><button id="bouton">Non, retour</button></a>
</body>
</html>