<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>affichage</title>
</head>
<body>

<h1>La liste de tous nos produits</h1>

<table>

<th>ID</th>
<th>Nom du produit</th>
<th>prix du produit</th>
<th>quantite produit</th>
<th>action</th>

<?php 
require_once("connexion.php");
$req=$conn->query("SELECT * FROM produit");
while($aff=$req->fetch()){?>




<tr>
    <td> <?php  echo $aff['id'] ;?></td>
    <td> <?php  echo $aff['nom_produit'];?></td>
    <td> <?php  echo $aff['prix_produit'];?></td>
    <td> <?php  echo $aff['qte_produit'];?></td>
    <td>
        <a href="suprimer.php?id=<?php echo $aff['id']?>">suprimer</a>

    </td>
</tr>
<?php
}
?>


</table>
    
</body>
</html>