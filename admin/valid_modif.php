<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../menu.css" type="text/css">
    <title>Modifier un joueur</title>
</head>
<body>
    <h1>Modification effectuée.</h1>
<body>
    <?php
    include('../secret.php');

    // Récupérer l'ID du skieur à modifier depuis l'URL
$nombre = $_GET['joueur_id']; // Utilisez $_GET['skieur_id'] pour récupérer l'ID du skieur

// Connexion à la base de données
$mabd = new PDO('mysql:host='.HOST.';dbname='.DBNAME.';charset=UTF8;', USER, PASSWORD);
$mabd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $newPlace = $_POST['new_place']; //strtoupper met le nom en full majuscules
    $newPseudo = ucfirst($_POST['new_pseudo']);
    $newTemps = $_POST['temps'];
    $newCommentaire = $_POST['commentaire'];

    // Préparer la requête de mise à jour
    $req = $mabd->prepare("UPDATE joueurs SET joueur_place = :place, joueur_pseudo = :pseudo, joueur_temps = :temps, joueur_commentaire = :commentaire WHERE joueur_id = :id");

    // Liaison des valeurs aux paramètres de la requête préparée
    $req->bindParam(':place', $newPlace);
    $req->bindParam(':pseudo', $newPseudo);
    $req->bindParam(':temps', $newTemps);
    $req->bindParam(':commentaire', $newCommentaire);
    $req->bindParam(':id', $nombre);

    // Exécution de la requête
    $req->execute();

    echo '<h2>Vous venez de modifier le joueur numéro ' . $nombre . '</h2>';
} else {
    // Si le formulaire n'a pas été soumis, récupérez les données actuelles du skieur
    $req = $mabd->prepare("SELECT * FROM skieurs WHERE skieur_id = :id");
    $req->bindParam(':id', $nombre);
    $req->execute();
    $skieur = $req->fetch(PDO::FETCH_ASSOC);
}
    echo '<h2>Votre modification a bien été prise en compte.</h2>'.'<br>'
    ?>
    <a href="backoffice.php"><button id="bouton">Retour</button></a>
</body>
</html>