<?php

$pdo = new PDO('mysql:host=mysql;dbname=basedetest;host=127.0.0.1', 'root', '', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);

/*
isset() : verifie qu'une variable existe et est non nulle
empty () : verifie qu'une variable est vide
is_null() : verifie qu'une variable est nulle (la vraible doit exister)
*/ 



$name = $_POST["name"];

$username = $_POST["username"];

$birthday = $_POST["birthday"];

$address = $_POST["address"];

$email = $_POST["email"];
var_dump($email);

$pays = $_POST["pays"];

$sql = "INSERT INTO user (name, username, birthday, address, email, pays) VALUES ('$name', '$username', '$birthday', '$address', '$email', '$pays')";
var_dump($sql);
$pdo->exec($sql);


?>

