<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <header>
        <nav>
            <ul class="flex items-center">
                <li>
                    <a href="index.php">Accueil &nbsp;</a>
                </li>
                <li>
                    <a href="index.php">Inscription &nbsp;</a>
                </li>
                <li>
                    <a href="index.php">Connexion &nbsp;</a>
                </li>
                <li>
                    <a href="index.php">Rechercher</a>
                </li>
            </ul>
        </nav>
    </header>

    <div>
        <form>
            <div>
                <label for="prenom">Prenom</label>
                <input type="text" id="prenom">
            </div>
            <div>
                <label for="nom">Nom</label>
                <input type="text" id="nom">
            </div>
            <div>
                <label for="nom">Email</label>
                <input type="email" id="email">
            </div>
            <div>
                <label for="password">Mot de passe</label>
                <input type="password" id="password">
            </div>
            <div>
                <label for="password2">Validation de mot de passe</label>
                <input type="password" id="password2">
            </div>
            <div>
                <input type="checkbox"> Informatique
                <input type="checkbox"> Voyages
                <input type="checkbox"> Sport
                <input type="checkbox"> Lecture
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>

    <footer>
        <a href="index.php">Accueil</a>
        <a href="index.php">Inscription</a>
        <a href="index.php">Connexion</a>
        <a href="index.php">Rechercher</a>
    </footer>
</body>

</html>