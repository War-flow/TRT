<?php

session_start();

require_once '../Log/Dsn.php';
require_once 'Header/Header.html';
require_once 'DataManager/AnManager.php';

if (isset($_SESSION['email'])) {

  header("Location:HomeAd.php");
} elseif (!isset($_SESSION['email'])) {


  $page = $_GET['page'] ?? 1;
  $manager = new AnnonceManager($pdo);

  $missions = $manager->getAnnonce($page);
  include 'View.php';

  $statement = $pdo->prepare('SELECT COUNT(*) AS totalAnnonce FROM annonce');
  if ($statement->execute()) {
    $totalMission = $statement->fetch(PDO::FETCH_ASSOC);
    for ($i = 1; $i <= ceil($totalMission['totalAnnonce'] / 2); $i++) {
      echo '<a class="btn btn-primary" role="button" href="?page=' . $i . '">' . $i . '</a> - ';
    }
  } 
} ?>

<head>
  <title>TRT Conseil</title>
  <h1>Offre Disponible</h1>
</head>