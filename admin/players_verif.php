<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../menu.css" type="text/css">
    <title>Administrator</title>
</head>
<body>
    <h1>New times</h1>
  <body>
    <a href="backoffice.php"><button>Back</button></a>
    <?php
            include('../secret.php');
            $mabd = new PDO('mysql:host='.HOST.';dbname='.DBNAME.';charset=UTF8;', USER, PASSWORD);
            $mabd->query('SET NAMES utf8;');
            $req = "SELECT * FROM valid_joueurs"; // Correction ici
            $resultat = $mabd->query($req);
?>
<table>
<tr> 
  <th>Time</th> 
  <th>nickname</th>
  <th>Ajouter</th>
  <th>Supprimer</th>
</tr>

<?php
// Boucle sur les résultats de la requête
while ($value = $resultat->fetch(PDO::FETCH_ASSOC)) {
?>
<tr>
  <?php 
    echo '<td>'.'<p style="text-align:center;">'.$value['valid_joueur_temps'].'</p>'.'</td>';   
    echo '<td>'.'<h2><p style="text-align: center;">'.$value['valid_joueur_pseudo'].'</h2>'.'</td>'; 
    echo '<td> <p><a href="ajouter.php" target="_blank">Ajouter</a></p></td>';
    echo '<td> <p><a href="supprimer_verif.php?valid_joueur_id='.$value['valid_joueur_id'].'">Supprimer</a></p></td>';
 ?>
</tr>
<?php
}
?>
</table>
</body>
</html>