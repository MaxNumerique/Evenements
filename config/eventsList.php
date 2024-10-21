<?php

$bdd = new PDO("mysql:host=localhost;dbname=evenements;charset=utf8;port=3306", "maxNumerique", "Lejizzus1");

$sql = "SELECT * FROM events";
$req = $bdd->query($sql);

$events = $req->fetchAll(PDO::FETCH_ASSOC);
