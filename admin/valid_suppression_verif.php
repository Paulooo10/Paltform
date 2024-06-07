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
// Vérifier si l'ID du joueur est passé dans l'URL
if(isset($_GET['valid_joueur_id'])) {
    $num = $_GET['valid_joueur_id'];
    include('../secret.php');
    $mabd = new PDO('mysql:host='.HOST.';dbname='.DBNAME.';charset=UTF8;', USER, PASSWORD);
    $mabd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Activer le mode d'erreur pour détecter les erreurs SQL

    // Préparer la requête de suppression avec une instruction préparée pour éviter les injections SQL
    $req = $mabd->prepare("DELETE FROM valid_joueurs WHERE valid_joueur_id = :id");

    // Liaison de la valeur de l'ID à la requête préparée
    $req->bindParam(':id', $num, PDO::PARAM_INT);

    // Exécution de la requête
    $success = $req->execute();

    if($success) {
        echo '<h2>Vous venez de supprimer le temps du joueur numéro '.$num.'</h2>';
    } else {
        // Afficher un message d'erreur en cas d'échec de la requête
        $errorInfo = $req->errorInfo();
        echo 'Erreur : ' . $errorInfo[2];
    }
} else {
    // Afficher un message d'erreur si l'ID du joueur n'est pas spécifié dans l'URL
    echo "Erreur : ID du joueur non spécifié dans l'URL.";
}
?>
<a href="players_verif.php"><button id="bouton">Retour</button></a>
</html>