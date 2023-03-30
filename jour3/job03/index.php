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
        </div>
        <div class="jeu">

            <div id="div1" data-id="1" data-row="1" data-col="1">
                <img src="logo1.png" id="logo1" data-id="">
            </div>

            <div id="div2" data-id="2" data-row="1" data-col="2">
                <img src="logo2.png" id="logo2" data-id="">
            </div>

            <div id="div3" data-id="3" data-row="1" data-col="3">
                <img src="logo3.png" id="logo3" data-id="">
            </div>

            <div id="div4" data-id="1" data-row="2" data-col="1">
                <img src="logo4.png" id="logo4" data-id="">
            </div>

            <div id="div5" data-id="2" data-row="2" data-col="2">
                <img src="logo5.png" id="logo5" data-id="">
            </div>

            <div id="div6" data-id="3" data-row="2" data-col="3">
                <img src="logo6.png" id="logo6" data-id="">
            </div>

            <div id="div7" data-id="1" data-row="3" data-col="1">
                <img src="logo7.png" id="logo7" data-id="">
            </div>

            <div id="div8" data-id="2" data-row="3" data-col="2">
                <img src="logo8.png" id="logo8" data-id="">
            </div>

            <div id="div9" data-id="3" data-row="3" data-col="3">
                <!-- <img src="logo9.png" id="logo9" data-id=""> -->
            </div>
        </div>
        
        <button id="melanger">Melanger</button>
        <button id="recommencer">Recommencer</button>

    </main>

    <script src="script.js"></script>
</body>
<style>
    .jeu {
        display: flex;
        flex-wrap: wrap;
        width: 600px;
        height: 600px;
        margin: auto;
    }
    img {
        width: 33%;
        height: 33%;
    }
</style>

</html>