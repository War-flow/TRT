  <?php
  //Id connexion base de données
  $hostname = 'uyu7j8yohcwo35j3.cbetxkdyhwsb.us-east-1.rds.amazonaws.com';
  $database = 'mahjmmdwa6sj72o9';
  $username = 'yy4kgsc6x14bh9ue';
  $password = 'a72u1xtlwrjxp3aw';

  //Tentative de connexion base de données
  try {
    $pdo = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //Création base de données si inexitant
    if ($pdo->exec('CREATE DATABASE IF NOT EXISTS mahjmmdwa6sj72o9') !== false) {
      $missionK = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);

      //Création table Missions si inexitant
      if ($missionK->exec('CREATE TABLE IF NOT EXISTS `missions` (
        `id` int(11) NOT NULL AUTO_INCREMENT,
        `title` varchar(255) NOT NULL,
        `description` text(500) NOT NULL,
        `codename` varchar(255) NOT NULL,
        `country` varchar(255) NOT NULL,
        `agent` varchar(120) NOT NULL,
        `targets` varchar(255) NOT NULL,
        `contacts` varchar(255) NOT NULL,
        `type` varchar(255) NOT NULL,
        `status` varchar(255) NOT NULL,
        `hide` varchar(255) DEFAULT "Pas de planque",
        `startDate` date NOT NULL,
        `endDate` date NOT NULL,
        PRIMARY KEY (`id`)
      )') !== false) {

        //Création table Agents si inexitant
        if ($missionK->exec('CREATE TABLE IF NOT EXISTS `agents` (
          `id` int(11) NOT NULL AUTO_INCREMENT,
          `codeId` int(11) NOT NULL,
          `firstname` varchar(255) NOT NULL,
          `lastname` varchar(255) NOT NULL,
          `birth` date NOT NULL,
          `nation` varchar(25) NOT NULL,
          `special` varchar(500) NOT NULL,
          PRIMARY KEY (`id`),
          UNIQUE KEY `codeId` (`codeId`))') !== false) {
        
        //Création table Admins si inexitant
          if ($missionK->exec('CREATE TABLE IF NOT EXISTS `admins` (
          `id` int(11) NOT NULL AUTO_INCREMENT,
          `firstname` varchar(255) NOT NULL,
          `lastname` varchar(255) NOT NULL,
          `email` varchar(255) NOT NULL,
          `password` varchar(60) NOT NULL,
          `creationdate` date DEFAULT current_timestamp(),
          PRIMARY KEY (`id`),
          UNIQUE KEY `email` (`email`))') !== false) {

            //Création table Contacts si inexitant
            if ($missionK->exec('CREATE TABLE IF NOT EXISTS `contacts` (
            `id` int(11) NOT NULL AUTO_INCREMENT,
            `firstname` varchar(255) NOT NULL,
            `lastname` varchar(255) NOT NULL,
            `birth` date NOT NULL,
            `codeName` varchar(25) NOT NULL,
            `nation` varchar(25) NOT NULL,
            PRIMARY KEY (`id`),
            UNIQUE KEY `codeName` (`codeName`))') !== false) {

              //Création table Cible si inexitant
              if ($missionK->exec('CREATE TABLE IF NOT EXISTS `target` (
                `id` int(11) NOT NULL AUTO_INCREMENT,
                `firstname` varchar(255) NOT NULL,
                `lastname` varchar(255) NOT NULL,
                `birth` date NOT NULL,
                `codeName` varchar(25) NOT NULL,
                `nation` varchar(25) NOT NULL,
                PRIMARY KEY (`id`),
                UNIQUE KEY `codeName` (`codeName`))') !== false) {

                //Création table Planque si inexitant
                if ($missionK->exec('CREATE TABLE IF NOT EXISTS `hide` (
                  `id` int(11) NOT NULL AUTO_INCREMENT,
                  `code` int(11) NOT NULL,
                  `address` varchar(350) NOT NULL,
                  `country` varchar(255) NOT NULL,
                  `type` varchar(255) NOT NULL,
                  PRIMARY KEY (`id`))') !== false) {
                  echo '';

                  //Affichager messages erreur des table
                } else {
                  echo 'Impossible de créer la table Planque<br>';
                }
              } else {
                echo 'Impossible de créer la table Cible<br>';
              }
            } else {
              echo 'Impossible de créer la table Contacte<br>';
            }
          } else {
            echo 'Impossible de créer la table Admins<br>';
          }
        } else {
          echo 'Impossible de créer la table Agents<br>';
        }
      } else {
        echo 'Impossible de créer la table Missions<br>';
      }
    } else {
      echo 'Impossible de créer la base<br>';
    }
    //Récupération du message erreur 
  } catch (PDOException $exception) {
    die($exception->getMessage());
  }
