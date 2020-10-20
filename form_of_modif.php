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

        <div class="form-group shadow p-3 mb-5 bg-white rounded">

        <input type="hidden" name="id" value="<?= $article['id']?>">
                <div class="row ">
                  <div class="col sm-2">
                    <input type="text" name="name" class="form-control" placeholder="First name">
                  </div>
                  <div class="col sm-2">
                    <input type="text" name="username" class="form-control" placeholder="Last name">
                  </div>
                </div>

            <label class="col-sm-2 col-form-label text-center"for="date">Date de naissance</label>
            <input class="col-sm form-control text-center" type="date" name="birthday">
      
            <label class="col sm-2col-form-label" for="inputAddress">Address</label>
            <input type="text"  name="address" class="form-control" id="inputAddress" placeholder="1234 Main St">

          </div>

            <label class="col-md-mdcol-form-label">E-mail</label>
            <input type="text" name="email"class="form-control"  placeholder="name@example.com">

            <div class="p-4">
            <button type="submit" class="btn btn-primary ">Envoyer</button>
        </div>
    </div>
    </form>
</body>
</html>