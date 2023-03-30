<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <main>
        <form>
            <label>ID:</label>
            <input type="text" id="id">

            <label>Nom:</label>
            <input type="text" id="name">
            
            <label>Type:</label>
            <select id="type">
                <option value=""></option>
                <option value="Grass">Grass</option>
                <option value="Poison">Poison</option>
                <option value="Fire">Fire</option>
                <option value="Flying">Flying</option>
                <option value="Water">Water</option>
                <option value="Normal">Normal</option>
                <option value="Bug">Bug</option>
                <option value="Electric">Electric</option>
                <option value="Ground">Ground</option>
                <option value="Fairy">Fairy</option>
                <option value="Fighting">Fighting</option>
                <option value="Psychic">Psychic</option>
                <option value="Rock">Rock</option>
                <option value="Steel">Steel</option>
                <option value="Ice">Ice</option>
                <option value="Ghost">Ghost</option>
                <option value="Dragon">Dragon</option>
                <option value="Dark">Dark</option>
                <option value="Fly">Fly</option>
            </select>

            <input type="button" id="filtrer" value="Filtrer">
        </form>

        <ul id="result"></ul>

    </main>
</body>
<script src="script.js"></script>
</html>