<?php 
session_start();

require_once 'Dsn.php';

if (isset($_SESSION['email'])) {

  header( "Location:../View/Home.php" );
}  elseif (isset($_POST['submit'])) {

  $email =  htmlspecialchars($_POST["email"]);
  $password =  htmlspecialchars($_POST["password"]);

  $sql = "SELECT * FROM ad WHERE email = '$email' ";
  $result = $pdo->prepare($sql);
  $result->execute();
  $data = $result->fetchAll();

  if (password_verify($password, $data[0]["pass"])) {
    header("Location:../View/HomeAd.php");
    $_SESSION['email'] = $email;
  }
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
  <title>Connexion KGB</title>
</head>

<body>
  <div class="box2">
    <div class="box">
      <form method="post" action="CLogin.php">
  
        <div class="center">
          <h1>Se Connecter</h1>
        </div>
  
        <label for="mail">Votre adresse Email</label>
          <input type="email" name="email" id="mail" placeholder="Votre Email.." maxlength="255" required autofocus>
  
        <label for="password">Votre Mot de passe</label>
        <input type="password" name="password" id="password" placeholder="Votre mot de passe.." maxlength="20" required>
  
        <div class="center">
        <button type="button submit" class="btn btn-info" value="Connexion" id="button " name="submit">Connexion</button>
        </div>
        <div class="center">
          <a href="CRegis.php">Inscription</a>
        </div>
      </form>
    </div>
  </div>
<script src="../Bootstrap/bootstrap.bundle.min.js"></script>
</body>
</html>