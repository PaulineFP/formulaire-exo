<?php
$pdo = new PDO('mysql:host=mysql;dbname=basedetest;host=127.0.0.1', 'root', '', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);

$query = $pdo->query('SELECT * FROM user');
$user = $query->fetchAll();

?>

<!doctype html>
<html lang="fr">
<head>
<meta charset="utf-8">
<title>Titre de la page</title>
<link rel="stylesheet" href="Style.css">
</head>
<body>

<table class="table">

    <tr>
        <th>name</th>
        <th>username</th>
        <th>birthday</th>
        <th>adress</th>
        <th>email</th>
    </tr>


    <?php foreach ($user as $item): ?>

     <tr>
        <td><?php echo  $item["name"] ?></td>
        <td><?php echo  $item["username"] ?></td>
        <td><?php echo  $item["birthday"] ?></td>
        <td><?php echo  $item["address"] ?></td>
        <td><?php echo  $item["email"] ?></td>
     </tr>

    <?php endforeach ?>

    </table>
    
</body>
</html>