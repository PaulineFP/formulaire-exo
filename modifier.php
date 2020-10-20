<?php

$pdo = new PDO('mysql:host=mysql;dbname=basedetest;host=127.0.0.1', 'root', '', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);

$id = $_REQUEST["lign_update"];

$id = intval($id); /*Change la valeur en int*/


/*$sql = "UPDATE user SET .... WHERE id = $id";*/





$req->execute();


?>

<!doctype html>
<html lang="fr">
<head>
<meta charset="utf-8">
<title>modif</title>
<link rel="stylesheet" href="Style.css">
</head>
<body>

<h1>Modif</h1>
</body>
</html>
