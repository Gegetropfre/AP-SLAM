<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page des produits</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Voici nos produits en vente</h1>
    
</body>
</html>




<?php

$connexion = new mysqli("localhost", "root", "", "objets-ventes");
$requet = "SELECT * FROM objet";
$objets = $connexion->query($requet);

foreach ($objets as $objet) {
    echo $objet['Nom'];
    echo " "; 
    echo $objet['Prix'] . " €";
    echo "<br>";
}

$connexion->close();