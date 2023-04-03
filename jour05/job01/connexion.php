<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <script src="script.js"></script>

</head>

<body>
    <?php
    require("config.php");
    ?>


    <h1>Connexion</h1>

    <?php
    if (isset($_POST["submit"])) { {
            $request = $bdd->prepare('SELECT * FROM utilisateurs WHERE email = ? AND password = ?');
            $request->execute([$_POST['email'], $_POST['password']]);
            $result = $request->fetch();
            $_SESSION["user"] = $result;
            header("Location:index.php");
        }
    }
    ?>

    <form method="post">
        <label>Email: </label>
        <input type="text" name="email"></br>

        <label>Password: </label>
        <input type="text" name="password"></br>

        <input type="submit" name="submit">

    </form>

</body>

</html>