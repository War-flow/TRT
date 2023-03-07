<?php
session_start();

require_once 'Dsn.php';

$id=$_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Information Complémentaire</title>
  <link rel="stylesheet" href="../CSS/Formulaire.css">
  <link rel="stylesheet" href="../Bootstrap/bootstrap.min.css">
</head>
<body>
      <div class="row">
        <div class="col">
          <?phP
          $recupData = $pdo->query("SELECT * FROM `recruteur`WHERE email = '$id'");
          $rec = $recupData->fetch(); { ?>
            <a class="btn btn-danger" href="../Gestion/Update/UpRecru.php?id=<?= $rec['id']; ?>" role="button">Recruteur</a>
          <?php } ?>
        </div>
        <div class="col">
          <?phP
          $recupData = $pdo->query("SELECT * FROM `candidats`WHERE email = '$id'");
          $rec = $recupData->fetch(); { ?>
            <a class="btn btn-danger" href="../Gestion/Update/UpCandi.php?id=<?= $rec['id']; ?>" role="button">Candidats</a>
          <?php } ?>
        </div>
      </div>
  <script src="../Bootstrap/bootstrap.bundle.min.js"></script>
</body>

</html>