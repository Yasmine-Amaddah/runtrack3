<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="../jquery-3.6.4.min.js"></script>
</head>

<body>
    <main>
        <div id="div0">
            <img src="arc1.png" id="arc1" data-id="">
            <img src="arc2.png" id="arc2" data-id="">
            <img src="arc3.png" id="arc3" data-id="">
            <img src="arc4.png" id="arc4" data-id="">
            <img src="arc5.png" id="arc5" data-id="">
            <img src="arc6.png" id="arc6" data-id="">
        </div>
        <div class="jeu">
            <div id="div1" data-id="1">
            </div>
            <div id="div2" data-id="2">
            </div>
            <div id="div3" data-id="3">
            </div>
            <div id="div4" data-id="4">
            </div>
            <div id="div5" data-id="5">
            </div>
            <div id="div6" data-id="6">
            </div>
        </div>
        <button id="melanger">Melanger</button>
        <p></p>
    </main>

    <script src="script.js"></script>
</body>
<style>
    .jeu {
        display: flex;
    }
</style>

</html>