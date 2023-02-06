<?php
session_start();

require_once '../../Log/Dsn.php';

if (isset($_GET['id']) && !empty($_GET['id'])) {


  if (isset($_POST['submit'])) {
    $adresse =  htmlspecialchars($_POST['adresse']);
    $company =  htmlspecialchars($_POST['company']);

    $getId = $_GET['id'];

    $recupData = $pdo->prepare("SELECT * FROM `recruteur` WHERE `id` = ? ");
    $recupData->execute(array($getId));
    $rec = $recupData->fetch();
    if ($recupData->rowCount() > 0) {

      $update = $pdo->prepare("UPDATE `recruteur` SET
      `company`='$company',
      `adresse`='$adresse'
      WHERE `id` = ?  ");

      $update->execute(array($getId));

      header('Location:../../index.php');
    } else {
      echo "Identifiant non trouvée dans la base de donnée";
    }
  }
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inscription Recruteur</title>
  <link rel="stylesheet" href="../../CSS/Formulaire.css">
  <link rel="stylesheet" href="../../Bootstrap/bootstrap.min.css">
</head>

<body>
  <div class="box2">
    <div class="box">
      <form class="form" method="post">
        <div class="center">
          <h1>Information Complémentaire</h1>
        </div>
        <label for="adresse">Adresse</label>
        <input type="text" name="adresse" class="text" maxlength="255" placeholder="Votre Addresse">

        <label for="company">Entreprise</label>
        <input type="text" name="company" class="text"  maxlength="255" placeholder="Nom de L'entreprise">

        <div class="center">
          <button type="submit" class="btn btn-info" name="submit">Valider</button>
        </div>
      </form>
    </div>
  </div>
  <script src="../../Bootstrap/bootstrap.bundle.min.js"></script>
</body>

</html>