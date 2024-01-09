<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
        <!-- <h1>Boutique</h1> -->
        <nav>
            <a href="http://localhost/PHP/cours_10/ap/index.html" id="accueil">Accueil</a>
            <a href="#">Contact</a>
            <a href="http://localhost/PHP/cours_10/ap/inscription.php">Me connecter</a>
            <a href="http://localhost/PHP/cours_10/ap/produits.php">Produits</a>
        </nav>

    </header>
    <section>
        <div id="liste-produits">
            
        <?php

$connexion = new mysqli("localhost", "root", "", "boutique");

$requete = "SELECT * FROM produits" ;
$resultat = $connexion->query($requete);

if ($resultat) {
    // Le résultat est un objet contenant les données de la requête
    while ($ligne = $resultat->fetch_assoc()) {
        // Traitement de chaque ligne de résultat
        echo $ligne['nom'] . "<br>";
    }

    // Libération des résultats
    $resultat->close();
} else {
    // En cas d'erreur
    echo "Erreur lors de l'exécution de la requête : " . $connexion->error;
}

$connexion->close();

?>


        </div>
    </section>
    
</body>

</html>

