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
            <form class="form" method="post" action="../DataManager/AnManager.php">
                    <div class="center">
                        <h1>Création Missions</h1>
                    </div>
                       <label for="title">Titre</label>
                        <input type="text" name="title" class="text"  required maxlength="255">

                        <label for="description">Description</label>
                        <textarea name="description" class="text" required maxlength="1000"></textarea>

                        <label for="hour">Heure par semaine</label>
                        <input type="text" name="hour" class="text" required maxlength="2">

                        <label for="salary">Salaire Brut</label>
                        <input type="text" name="salary" class="text" required maxlength="6" minlength="1">

                        <div class="center">
                        <button type="button submit" class="btn btn-info" value="Connexion" id="button " name="submit">Valider</button>
                        </div>

                        </div>
            </form>
        </div>
    </div>
    <script src="../../Bootstrap/bootstrap.bundle.min.js"></script>
</body>

</html>