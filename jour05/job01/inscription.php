<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <script src="script.js"></script>

</head>

<body>
    <?php
    require("config.php");
    ?>

    <h1>Inscription</h1>

    <?php

    if (isset($_POST["submit"])) {
        if ($_POST['password'] == $_POST['password2']){
            $request = $bdd->prepare('INSERT INTO `utilisateurs`(`nom`, `prenom`, `email`, `password`) VALUES (?,?,?,?)');
            $request->execute([$_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['password']]); 
            header("Location:connexion.php");
        }
        else {
            echo "Les deux mots de passe ne sont pas identiques";
        }
    }
    ?>

    <form method="post" id="myForm">
        <label>Nom: </label>
        <input type="text" name="nom" id="nom"></br>

        <label>Prenom: </label>
        <input type="text" name="prenom" id="prenom"></br>

        <label>Email: </label>
        <input type="text" name="email" id="email"></br>

        <label>Password: </label>
        <input type="text" name="password" id="password"></br>

        <label>Confirmer le Password: </label>
        <input type="text" name="password2"></br>

        <input type="submit" name="submit" id="submitBtn">

    </form>
    <div id="message"></div>
</body>

</html>