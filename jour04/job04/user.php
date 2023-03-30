<?php

$bdd = new PDO("mysql:host=localhost;dbname=utilisateurs", 'root', '');
$request = $bdd->prepare('SELECT * FROM utilisateurs');
$request->execute();
$result = $request->fetchAll();

$json = json_encode($result);
echo $json;
?>