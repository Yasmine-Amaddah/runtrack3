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

<body class="text-center bg-blue-50">
    <header class="bg-blue-50">
        <nav>
            <ul class="flex items-center justify-center" class="decoration-inherit">
                <li>Accueil &nbsp;</li>
                <li>Contact</li>
        </nav>
    </header>

    <div class="bg-purple-50">
        <form>
            <div class="m-10">
                <div class="flex items-center justify-center">
                    <img class="h-7 w-7 mr-2 " src="https://cdn.icon-icons.com/icons2/1769/PNG/512/4092564-about-mobile-ui-profile-ui-user-website_114033.png">
                    <label class="text-gray-900 focus-within:text-green-600 focus-within:underline" for="prenom">Prenom</label>
                    <input class="ml-2 px-4 py-2 border rounded shadow-inner" type="text" id="prenom">
                </div>
            </div>

            <div class="m-10">
                <div class="flex items-center justify-center">
                    <img class="h-7 w-7 mr-4 " src="https://cdn.icon-icons.com/icons2/1769/PNG/512/4092564-about-mobile-ui-profile-ui-user-website_114033.png">
                    <label for="nom">Nom</label>
                    <input class="ml-2 px-4 py-2 border rounded shadow-inner" type="text" id="nom">
                </div>
            </div>

            <div class="m-10">
                <div class="flex items-center justify-center">
                    <img class="h-7 w-7 mr-4 " src="https://cdn-icons-png.flaticon.com/512/561/561127.png">
                    <label for="nom">Email</label>
                    <input class="ml-2 px-4 py-2 border rounded shadow-inner" type="email" id="email">
                </div>
            </div>
            <div class="m-10">
                <div class="flex items-center justify-center">
                    <img class="h-7 w-7 mr-4 " src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIUAAACFCAMAAABCBMsOAAAAY1BMVEX///8AAADJycmOjo46OjpDQ0P09PStra1sbGwXFxfb29v4+PhpaWn7+/vk5OTp6emHh4fU1NR0dHS2trZZWVkcHBylpaUoKCi9vb2enp5ISEgwMDB/f38hISHDw8MICAiWlpbzo//XAAAC7UlEQVR4nO2ba3ezIAzHtfVSxbt2VWe13/9TPqfPzgw6K4SFrjvL/22B/uQSEgiOYyxRtl3Vv0du9N5XXVsK86ZMldeJN7myJi+p86cyxMPZ3dJ5iJ/GUDabCB9qyqcwZKcdhrtOmX2IMFJAuG4UWmYIEiXDXUlgEyK+akG47tXiLC3VozGPirVJOm793dnzvc1lO9qBOKz/xxvCLP3/U5qFg7f++WADIluZyuawnILBoVmVsLBiU3/xF5vGaWXO/JScopLbv7QPSrUXuVhFDdHKrSePd618YVAewZpKXqOn3ZKygY9oIY5S04WibIEoi1IuNTwoSw9SaUqPQ+oKjYkvL6cjHUQmzXwdI5BJq4nOaITQaqdVoYMKdLs8GOdez8UV/VzDo4KI4ctqzSo1VKHa498MPgy6742IAoz3TbvOba5DZMYFrBB916WEVUITLQVzgxiDDCafxgeFz8J0Lgwjje8H1gIz0WBK01gMMN8YHw78QxojDpsTpm9hHNXbn45mh2HCGKB4dkL33RE0RYSiiJiCKZiCKZiCKZji1ShSETjzuUhUikBXAk4lEycQ3zhbEnXlL06IjHXxq9osIBDdpG4eoakz4Mj3rh/M1KCPVHKaoVjqgsQQNiDQ0eJR3aKRULFJrm7PUJgxKdTNGQpx9CgdCFFL80jqrli68PAoBM2d9XcBiDF7mmP9FDpXP9aljrfN4n6mYAqmYAqmYAqmYIofpEjbpElapUdml0J8BPSJyqe1S/F5tqE6o7BKAdGTItqxSgFXyIpLZ6sUcLGnuKJjCqZgCqZgCqZgCqZgil9K8Rp+52v44HOenCq37i/EZo4zDsmgfqTxJ2J2pmAKpmAKpmAKpvhFFFSv1goDCin/gubxR2CSfyHnovT+9yUl2CByUVL6vLVPNYjkFlvpWrjp/hr5WtJDLVrdMBBO+uVFNok8ZMpTrvuKH6MrOrUysJDfaWB80pB2VLzQLAMtGIueZmCufTHudcQ/XqUtnqfiLNMAAAAASUVORK5CYII=">
                    <label for="password">Mot de passe</label>
                    <input class="ml-2 px-4 py-2 border rounded shadow-inner" type="password" id="password">
                </div>
            </div>
            <div class="m-10">
                <div class="flex items-center justify-center">
                    <img class="h-7 w-7 mr-4 " src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIUAAACFCAMAAABCBMsOAAAAY1BMVEX///8AAADJycmOjo46OjpDQ0P09PStra1sbGwXFxfb29v4+PhpaWn7+/vk5OTp6emHh4fU1NR0dHS2trZZWVkcHBylpaUoKCi9vb2enp5ISEgwMDB/f38hISHDw8MICAiWlpbzo//XAAAC7UlEQVR4nO2ba3ezIAzHtfVSxbt2VWe13/9TPqfPzgw6K4SFrjvL/22B/uQSEgiOYyxRtl3Vv0du9N5XXVsK86ZMldeJN7myJi+p86cyxMPZ3dJ5iJ/GUDabCB9qyqcwZKcdhrtOmX2IMFJAuG4UWmYIEiXDXUlgEyK+akG47tXiLC3VozGPirVJOm793dnzvc1lO9qBOKz/xxvCLP3/U5qFg7f++WADIluZyuawnILBoVmVsLBiU3/xF5vGaWXO/JScopLbv7QPSrUXuVhFDdHKrSePd618YVAewZpKXqOn3ZKygY9oIY5S04WibIEoi1IuNTwoSw9SaUqPQ+oKjYkvL6cjHUQmzXwdI5BJq4nOaITQaqdVoYMKdLs8GOdez8UV/VzDo4KI4ctqzSo1VKHa498MPgy6742IAoz3TbvOba5DZMYFrBB916WEVUITLQVzgxiDDCafxgeFz8J0Lgwjje8H1gIz0WBK01gMMN8YHw78QxojDpsTpm9hHNXbn45mh2HCGKB4dkL33RE0RYSiiJiCKZiCKZiCKZji1ShSETjzuUhUikBXAk4lEycQ3zhbEnXlL06IjHXxq9osIBDdpG4eoakz4Mj3rh/M1KCPVHKaoVjqgsQQNiDQ0eJR3aKRULFJrm7PUJgxKdTNGQpx9CgdCFFL80jqrli68PAoBM2d9XcBiDF7mmP9FDpXP9aljrfN4n6mYAqmYAqmYAqmYIofpEjbpElapUdml0J8BPSJyqe1S/F5tqE6o7BKAdGTItqxSgFXyIpLZ6sUcLGnuKJjCqZgCqZgCqZgCqZgil9K8Rp+52v44HOenCq37i/EZo4zDsmgfqTxJ2J2pmAKpmAKpmAKpvhFFFSv1goDCin/gubxR2CSfyHnovT+9yUl2CByUVL6vLVPNYjkFlvpWrjp/hr5WtJDLVrdMBBO+uVFNok8ZMpTrvuKH6MrOrUysJDfaWB80pB2VLzQLAMtGIueZmCufTHudcQ/XqUtnqfiLNMAAAAASUVORK5CYII=">
                    <label for="password2">Validation de mot de passe</label>
                    <input class="ml-2 px-4 py-2 border rounded shadow-inner" type="password" id="password2">
                </div>
            </div>
            <div class="m-10">
                <input type="checkbox"> Informatique
                <input type="checkbox"> Voyages
                <input type="checkbox"> Sport
                <input type="checkbox"> Lecture
            </div>
            <button class="border-4 border-black border-dashed p-3 bg-clip-border bg-gray-200 bg-no-repeat w-50" class="m-10" type="submit">Submit</button>
        </form>
    </div>

    <footer class="bg-blue-50 m-10">
        <a href="index.php">Accueil</a>
        <a href="index.php">Inscription</a>
        <a href="index.php">Connexion</a>
        <a href="index.php">Rechercher</a>
    </footer>
</body>

</html>