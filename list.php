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
<link rel="stylesheet" href="style.css">
<script src="script.js"></script>
</head>
<body>

<table class="table">
    <tr>
        <th>name</th>
        <th>username</th>
    </tr>
    <?php foreach ($user as $item): ?>
     <tr>
        <td><?php echo  $item["name"] ?></td>
        <td><?php echo  $item["username"] ?></td>
     </tr>
    <?php endforeach ?>
    </table>
</body>
</html>