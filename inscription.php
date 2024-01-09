<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="inscription.css">
</head>
<body>

    <h1>Votre inscription</h1>

    <section class="obligatory">
    <form method="POST">

        <label for="gender">Civilité :</label><br>
        <input name="gender" type="radio" value="male"><label>Homme</label><br><br>
        <input name="gender" type="radio" value="female"><label>Femme</label><br><br>
        <input name="gender" type="radio" value="empty"><label>Préfère ne pas le dire</label><br><br>

        <label for="firstname">Prénom :</label><br>
        <input name="firstname" type="text" placeholder="Votre nom..."><br><br>
        
        <label for="lastname">Nom :</label><br>
        <input name="lastname" type="text" placeholder="Votre prénom..."><br><br>

        <label for="age">Age :</label><br>
        <input name="age" type="age" placeholder="Votre âge..."><br><br>

        <label for="email">E-mail :</label><br>
        <input name="email" type="email" placeholder="Votre email..."><br><br>

        <label for="password">Mot de passe :</label><br>
        <input name="password" type="password" placeholder="Votre mot de passe..."><br><br>
    </section>
   

    
    <h2>Informations complémentaires</h2>

    <section class="optional">
        <label for="address">Adresse :</label><br>
        <input name="address" type="address" placeholder="Votre adresse..."><br><br>

        <label for="payment">Moyen de paiement :</label><br>
        <input type="payment" Type="payment" placeholder="Votre moyen de paiement..."><br><br>
        <input type="submit" name="submit">
    </section>


    </form>
    

    
</body>

<?php

    if (isset($_POST['submit'])) :

        $keys = ['gender', 'firstname', 'lastname', 'age', 'email', 'password'];

    foreach($keys as $key) {
        if (empty($_POST[$key])) {
            $error = true;
        }
    }

  if ($error) : 

?>

<p>Veuillez remplir tous les champs obligatoires ! </p>


<?php endif ?>
<?php endif ?>

<?php 
