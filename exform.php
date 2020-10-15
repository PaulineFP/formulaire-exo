<?php

$pdo = new PDO('mysql:host=mysql;dbname=basedetest;host=127.0.0.1', 'root', '', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);

/*
isset() : verifie qu'une variable existe et est non nulle
empty () : verifie qu'une variable est vide
is_null() : verifie qu'une variable est nulle (la vraible doit exister)
*/ 

$name = $_POST['name'];

$username = $_POST['username'];

/*
$DateDeNaissance = $_POST['date-de-naissance'];

$adresse = $_POST['adresse'];

$email = $_POST['email'];
*/


$sql = "INSERT INTO user (name, username) VALUES ('$name', '$username')";

$pdo->exec($sql);


/*
while ($donnees = $query->fetch())
{
echo $donnees['nom'];
}
*/
?>

