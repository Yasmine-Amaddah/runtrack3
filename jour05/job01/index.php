<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="script.js"></script>
</head>

<body>
    <?php
    require("config.php");

    if (isset($_SESSION["user"])) {
        echo "Bonjour " . $_SESSION["user"]["prenom"] . '</br> <form method="post"><input type="submit" name="deco" value="Deconnexion"></form>';
        if (isset($_POST["deco"])) {
            echo "Vous n'etes pas connecté !";
            session_destroy();
            header('location: index.php');
        }

    } else {
        echo "Vous n'etes pas connecté !" ?>
        <div><span>Vous n'avez pas encore de compte ? <a style="color:red" href="inscription.php">Inscrivez-vous !</a></span></div>
        <div><span>Vous avez deja un compte ? <a style="color:red" href="connexion.php">Connectez-vous !</a></span></div>
    <?php }
    ?>
</body>

</html>