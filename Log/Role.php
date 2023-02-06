<?php
session_start();

require_once 'Dsn.php';
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inscription Recruteur</title>
  <link rel="stylesheet" href="../CSS/Formulaire.css">
  <link rel="stylesheet" href="../Bootstrap/bootstrap.min.css">
</head>

<body>
  <div class="box2">
    <div class="box">
      <form class="form">
        <div class="center">
          <h1>Je suis </h1>
        </div>

        <?phP
        $recupData = $pdo->query('SELECT * FROM `recruteur`');
        while ($rec = $recupData->fetch()) { ?>
            <a class="btn btn-danger" href="../Gestion/Update/UpRecru.php?id=<?= $rec['id']; ?>" role="button">Recruteur</a>
        <?php } ?>
        </div>
      </form>
    </div>
  </div>
  <script src="../../Bootstrap/bootstrap.bundle.min.js"></script>
</body>

</html>