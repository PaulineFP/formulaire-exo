<?php

/*
isset() : verifie qu'une variable existe et est non nulle
empty () : verifie qu'une variable est vide
is_null() : verifie qu'une variable est nulle (la vraible doit exister)
*/ 

$nom = $_POST['nom'];

$prenom = $_POST['prenom'];

$DateDeNaissance = $_POST['date-de-naissance'];

$adresse = $_POST['adresse'];

$email = $_POST['email']

$pdo = new PDO('mysql:host=mysql;dbname=basedetest;host=127.0.0.1', 'root', '', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);

$sql = "INSERT INTO `user`(`nom`, `prenom`,'date de naissance', 'adresse', 'email' ) VALUES ($nom,$prenom,$DateDeNaissance,$adresse,$email)";


?>