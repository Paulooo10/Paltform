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
    $mabd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Activer le mode d'erreur pour détecter les erreurs SQL

    // Préparer la requête de suppression avec une instruction préparée pour éviter les injections SQL
    $req = $mabd->prepare("DELETE FROM joueurs WHERE joueur_id = :id");
    
    // Liaison de la valeur de l'ID à la requête préparée
     $req->bindParam(':id', $num, PDO::PARAM_INT);
    
    // Exécution de la requête
    $req->execute();
    
    echo '<h2>Vous venez de supprimer le joueur numéro '.$num.'</h2>';
?>
<a href="backoffice.php"><button id="bouton">Retour</button></a>
</html>