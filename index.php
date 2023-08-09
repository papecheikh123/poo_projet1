<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>php-mysql</title>
</head>
<body>

<h1>FORMULAIRE D'AJOUT DE PRODUIT</h1>
    <form action="" method="post">
      <label for=""></label>nom_produit<input type="text" name="nom_produit" autocomplete="off">
      <label for=""></label>prix_produit<input type="text"name="prix_produit"autocomplete="off">
      <label for=""></label>qte_produit<input type="number" min="1" name="qte_produit"autocomplete="off">
        <button type="submit" class="btn btn-warning" name="enregistrer">Enregistrer</button>

    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>

<?php 
//verification
require_once ("connexion.php");
if(isset($_POST['enregistrer']))
{

$nom_produit=$_POST['nom_produit'];
$prix_produit=$_POST['prix_produit'];
$qte_produit=$_POST['qte_produit'];

if(!empty($nom_produit) AND !empty($prix_produit) AND !empty($qte_produit))
//filtre
{

    if(strlen($nom_produit<5))
    {
        echo "le nom du produit doit contenir au moin 5 caracteres";
    }
    else
    //requette
    
    {
        $req=$conn->prepare("INSERT INTO produit(nom_produit,prix_produit,qte_produit) value(?,?,?)");
        $req->execute(array($nom_produit,$prix_produit,$qte_produit));

        if($req){echo "enregistrement effectuer avec succes"; }
    }

}
else{
    echo "veillez remplir tous les champs SVP!";
}

}

?> 