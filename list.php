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
        <th>pays</th>
    </tr>


    <?php foreach ($user as $item): ?>
        
<div>
     <tr>
        <td><?php echo  $item["name"] ?>
        <a  class="delete" href="delete.php?article_delete=<?= intval($article['id']) ?> ">Supprimer</a>
    </td>
        <td><?php echo  $item["username"] ?>
       

    </td>
        <td><?php echo  $item["birthday"] ?>
        

    </td>
        <td><?php echo  $item["address"] ?>
       
    </td>
        <td><?php echo  $item["email"] ?>
        
    </td>

    <td>
        <?php echo $item["pays"]?>
    </td>
        

     </tr>
    </div>
     <?php endforeach ?>
   

    </table>
    
</body>
</html>