<?php

$pdo = new PDO('mysql:host=mysql;dbname=basedetest;host=127.0.0.1', 'root', '', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);

$ins = $pdo->prepare('SELECT * FROM user WHERE id= :num');

$ins->bindParam(':num', $_GET['Modification']);
$ins->execute();

$item = $ins->fetch();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylseet" href="exform.css">
    <title> Modification</tilte>
<head>

<body>

<form action="modifier.php" method="POST">

    <imput type="text"    name="name" placeholder="Ecrit ton nom"> 
    <imput type="text"    name="username">
    <imput type="date"    name="birthday">
    <imput type="text"    name="address">
    <imput type="text"    name="email">

    <input type="submit" name="Modification" value="Modifier">

</form>

</body>
</html>