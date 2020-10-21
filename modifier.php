<?php

$pdo = new PDO('mysql:host=mysql;dbname=basedetest;host=127.0.0.1', 'root', '', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);

if(isset($_POST['id'])){

    $id = $_REQUEST['id'];
    $id = intval($id); /*Change la valeur en int*/

    $name = $_POST['name'];
    $username = $_POST['username']; 
    $birthday = $_POST['birthday'];
    $address = $_POST['address'];
    $email = $_POST['email'];

    $req = $pdo->prepare("UPDATE user SET name = '$name', username = '$username', birthday = '$birthday', address = '$address', email ='$email'  WHERE id = '$id'");
    var_dump($req);
    $req->execute();
}

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
