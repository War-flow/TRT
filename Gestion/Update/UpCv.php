<?php
session_start();

$hostname = 'localhost';
$database = 'db_trt';
$username = 'root';
$password = '';

  $pdo = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);


  if (isset($_POST['submit'])) {
    $name = $_FILES['file']['name'];
    $type = $_FILES['file']['type'];
    $data = file_get_contents($_FILES['file']['tmp_name']);

    $db = $pdo->prepare("INSERT INTO cv VALUES ('',?,?,?)");
    $db->bindParam(1,$name);
    $db->bindParam(2,$type);
    $db->bindParam(3,$data);
    $db->execute();
  }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Base de donneé Missions</title>
    <link rel="stylesheet" href="../../CSS/Formulaire.css">
    <link rel="stylesheet" href="../../Bootstrap/bootstrap.min.css"> 
</head>

<body>
    <div class="box2">
        <div class="box">
            <form class="form" method="post" enctype="multipart/form-data">
                    <div class="center">
                        <h1>Information Complémentaire</h1>
                    </div>
                        <label for="lastname">Ajoute un Cv</label>
                        <input type="file" name="file" class="text" required>

                        <div class="center">
                            <button type="submit" class="btn btn-info" name="submit">Valider</button>
                        </div>
            </form>
        </div>
    </div>
    <script src="../../Bootstrap/bootstrap.bundle.min.js"></script>
</body>

</html>