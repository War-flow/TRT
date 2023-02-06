  <?php
  //Id connexion base de données
  $hostname = 'localhost';
  $database = 'db_trt';
  $username = 'root';
  $password = '';

  //Tentative de connexion base de données
  try {
    $pdo = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      //Création table Cv si inexitant
      if ($pdo->exec('CREATE TABLE IF NOT EXISTS `cv` (
                `id` int(11) NOT NULL AUTO_INCREMENT,
                `file_name` varchar(100) NOT NULL,
                `type` varchar(100) NOT NULL,
                `size` varchar(100) NOT NULL,
                PRIMARY KEY (`id`)
            )') !== false) {

        //Création table Annonce si inexitant
        if ($pdo->exec('CREATE TABLE IF NOT EXISTS `annonce` (
        `id` int(11) NOT NULL AUTO_INCREMENT,
        `title` varchar(255) NOT NULL,
        `adresse` varchar(255) NOT NULL,
        `description` text(500) NOT NULL,
        `start` time NOT NULL,
        `end` time NOT NULL,
        `salary` decimal(4) NOT NULL,
        `targets` varchar(255) NOT NULL,
        `contrat` varchar(50) NOT NULL,
        `cv` int REFERENCES cv(id),
        PRIMARY KEY (`id`)
      )') !== false) {

          //Création table Candidats si inexitant
          if ($pdo->exec('CREATE TABLE IF NOT EXISTS `candidats` (
          `id` int(11) NOT NULL AUTO_INCREMENT,
          `email` varchar(255) NOT NULL,
          `pass` varchar(60) NOT NULL,
          `firstname` varchar(255) NOT NULL,
          `lastname` varchar(255) NOT NULL,
          `role` varchar(2) DEFAULT "CA",
          `special` varchar(500) NOT NULL,
          `cv` int REFERENCES cv(id),
          PRIMARY KEY (`id`)
      )') !== false) {

            //Création table Admin si inexitant
            if ($pdo->exec('CREATE TABLE IF NOT EXISTS `ad` (
          `id` int(11) NOT NULL AUTO_INCREMENT,
          `email` varchar(255) NOT NULL,
          `pass` varchar(60) NOT NULL,
          `role` varchar(2) DEFAULT "AD",
          PRIMARY KEY (`id`),
          UNIQUE KEY `email` (`email`))') !== false) {

              //Création table Consultant si inexitant
              if ($pdo->exec('CREATE TABLE IF NOT EXISTS `consultant` (
            `id` int(11) NOT NULL AUTO_INCREMENT,
            `email` varchar(255) NOT NULL,
            `pass` varchar(60) NOT NULL,
            `role` varchar(2) DEFAULT "CO",
            PRIMARY KEY (`id`),
            UNIQUE KEY `email` (`email`))') !== false) {

                //Création table Recruteur si inexitant
                if ($pdo->exec('CREATE TABLE IF NOT EXISTS `recruteur` (
                `id` int(11) NOT NULL AUTO_INCREMENT,
                `email` varchar(255) NOT NULL,
                `pass` varchar(60) NOT NULL,
                `company` varchar(255) NULL,
                `adresse` varchar(255) NULL,
                `role` varchar(2) DEFAULT "RE",
                `annonce` int REFERENCES annonce(id),
                PRIMARY KEY (`id`),
                UNIQUE KEY `email` (`email`))') !== false) {

                  //Affichager messages erreur des table
                } else {
                  echo 'Impossible de créer la table Recruteur<br>';
                }
              } else {
                echo 'Impossible de créer la table Consultant<br>';
              }
            } else {
              echo 'Impossible de créer la table Admin<br>';
            }
          } else {
            echo 'Impossible de créer la table Candidats<br>';
          }
        } else {
          echo 'Impossible de créer la table Annonce<br>';
        }
      } else {
        echo 'Impossible de créer la table CV<br>';
      }
    }
    //Récupération du message erreur 
     catch (PDOException $exception) {
    die($exception->getMessage());
  }
