<?php 
session_start();

require_once 'Dsn.php';

if (isset($_SESSION['email'])) {

  header( "Location:../View/Home.php" );
} elseif (isset($_POST['submit'])) {

  $email = $_POST["email"];
  $password = $_POST["password"];

  $password = password_hash($password, PASSWORD_DEFAULT);
  $sql = "INSERT INTO ad (id, email, pass) 
      VALUES (UUID(), '$email', '$password')";
  $req = $pdo->prepare($sql);
  $req->execute();
  header( "Location:../View/Home.php" );

  $_SESSION['email'] = $email;
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../CSS/Formulaire.css">
  <link rel="stylesheet" href="../Bootstrap/bootstrap.min.css"> 
  <title>Insciption KGB</title>
</head>

<body>
  <div class="box2">
    <div class="box">
      <form class="form" method="post" action="CRegis.php">

        <div class="center">
          <h1>Inscription</h1>
        </div>
        <div>

          <label for="mail">Votre adresse Email</label>
          <input type="email" name="email" id="mail" placeholder="Votre Email.." maxlength="255" required autofocus>

          <label for="password">Votre Mot de passe</label>
          <input type="password" name="password" id="password" placeholder="Votre mot de passe.." maxlength="15" minlength="2" required>

        </div>
        <div class="center">
        <button type="button submit" class="btn btn-info" value="Inscription" id="button " name="submit">S’INSCRIRE</button>
        </div>
        <div class="center">
          <a href="CLogin.php">Connexion</a>
        </div>
      </form>
    </div>
  </div>
  <script src="../Bootstrap/bootstrap.bundle.min.js"></script>
</body>
</html>