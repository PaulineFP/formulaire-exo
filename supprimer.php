<?php

$pdo = new PDO('mysql:host=mysql;dbname=basedetest;host=127.0.0.1', 'root', '', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);


$id = $_REQUEST["article_delete"];
$id = intval($id);
$req = $pdo->prepare("DELETE FROM article WHERE id = $id ");
$req->execute();


/*$query->bindParam(':num', $_GET['numContact']);*/



/*

$query = $pdo->prepare('DELETE * FROM user WHERE id=:num LIMIT 1');


$pdoStat->bindValue(':num', $_GET['numContact'], PDO::PARAM_INT);

$executeIsOK = $pdoStat->execute();

if($executeIsOK){
    $message = 'Le contact a été suprimé';
}
else{
    $message = 'Echec de la suppression';
}

*/
?>

<!doctype html>
<html lang="fr">
<head>
<meta charset="utf-8">
<title>Titre de la page</title>
<link rel="stylesheet" href="Style.css">
</head>
<body>

<h1>Suppression</h1>
</body>
</html>





