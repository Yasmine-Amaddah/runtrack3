<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        clifford: '#da373d',
                    }
                }
            }
        }
    </script>
</head>

<body class="text-center">
    <header class="bg-blue-50">
        <nava>
            <ul class="flex items-center justify-center" class="decoration-inherit">
                <li>Accueil &nbsp;</li>
                <li>Contact</li>
        </nav>
    </header>

    <div class="bg-purple-50">
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

    <footer class="bg-blue-50">
        <a href="index.php">Accueil</a>
        <a href="index.php">Inscription</a>
        <a href="index.php">Connexion</a>
        <a href="index.php">Rechercher</a>
    </footer>
</body>

</html>