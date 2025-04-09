<?php

$bdd = new PDO(
    "mysql:host=db;port=3307;dbname=evenements;charset=utf8",
    'root',
    'root'
);

$sql = "SELECT * FROM events";
$req = $bdd->query($sql);

$events = $req->fetchAll(PDO::FETCH_ASSOC);
