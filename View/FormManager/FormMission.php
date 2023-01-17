<?php require_once '../Header/Ad.html'; ?>
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
            <form class="form" method="post" action="../DataManager/MissionManager.php">
                    <div class="center">
                        <h1>Création Missions</h1>
                    </div>
                       <label for="title">Titre</label>
                        <input type="text" name="title" class="text"  required maxlength="255">

                        <label for="description">Description</label>
                        <textarea name="description" class="text" required maxlength="1000"></textarea>

                        <label for="codename">Nom de code</label>
                        <input type="text" name="codename" class="text" required maxlength="255">

                        <label for="country">Pays</label>
                        <input type="text" name="country" class="text" required maxlength="25">

                        <label for="agent"> Code Agents</label>
                        <input type="text" name="agent" class="text" required maxlength="50" minlength="5">

                        <label for="targets">Cible</label>
                        <input type="text" name="targets" class="text" required maxlength="255">

                        <label for="contacts">Contacts</label>
                        <input type="text" name="contacts" class="text" required maxlength="255">

                        <label for="type">Type</label>
                        <input type="text" name="type" class="text" required maxlength="255">

                        <label for="status">Status</label>
                        <select class="text" name="status">
                          <option value="En Préparation">En Préparation</option>
                          <option value="En Cours">En Cours</option>
                          <option value="Terminé">Terminé</option>
                          <option value="Echec">Echec</option>
                        </select><br>

                        <label for="hide">Code Planque</label>
                        <input type="number" name="hide" class="text" maxlength="12" minlength="12">

                        <label for="startDate">Date de début</label>
                        <input type="date" name="startDate" class="text" required>

                        <label for="endDate">Date de fin</label>
                        <input type="date" name="endDate" class="text"required>
                        <div class="center">
                            <button type="submit" class="btn btn-info" name="submit">Créer une Missions</button>
                        </div>
            </form>
        </div>
    </div>
    <script src="../../Bootstrap/bootstrap.bundle.min.js"></script>
</body>

</html>