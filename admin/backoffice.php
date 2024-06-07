<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../menu.css" type="text/css">
    <title>Administrator</title>
</head>
<body>
    <h1>Players gestion</h1>
  <body>
    <a href="../index.php"><button>Go to main page</button></a>
    <a href="players_verif.php"><button>View new times</button></a>
    <?php
            include('../secret.php');
            $mabd = new PDO('mysql:host='.HOST.';dbname='.DBNAME.';charset=UTF8;', USER, PASSWORD);
            $mabd->query('SET NAMES utf8;');
            $req = "SELECT * FROM joueurs"; // Correction ici
            $resultat = $mabd->query($req);
?>
<a href="ajouter.php"><button>Ajouter un joueur</button></a>
<table>
<tr> 
  <th>Place</th>
  <th>Time (in seconds)</th> 
  <th>nickname</th>
  <th>comment from the developer</th>
  <th>Supprimer</th>
  <th>Modifier</th>
</tr>

<?php
// Boucle sur les résultats de la requête
while ($value = $resultat->fetch(PDO::FETCH_ASSOC)) {
?>
<tr>
  <?php 
    echo '<td>'.'<h2>'.$value['joueur_place'].'</h2>'.'</td>';   
    echo '<td>'.'<p style="text-align: center;">'.$value['joueur_temps'].'</h3>'.'</td>'; 
    echo '<td>'.'<p>'.$value['joueur_pseudo'].'</p>'.'</td>'; 
    echo '<td>'.'<p>'.$value['joueur_commentaire']. '</p>'; 
    echo '<td> <p><a href="supprimer.php?joueur_id='.$value['joueur_id'].'">Supprimer</a></p></td>';
    echo '<td> <p><a href="modifier.php?joueur_id='.$value['joueur_id'].'">Modifier</a></p></td>';
  ?>
</tr>
<?php
}
?>
</table>
</body>
</html>