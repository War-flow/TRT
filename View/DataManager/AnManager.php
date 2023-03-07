<?php 

$hostname = 'localhost';
$database = 'db_trt';
$username = 'root';
$password = '';

$pdo = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);

if (isset($_POST['submit']))
{
   $title =  htmlspecialchars($_POST['title']);
   $description = htmlspecialchars($_POST['description']);
   $country = htmlspecialchars($_POST['country']);
   $contrat = htmlspecialchars($_POST['contrat']);
   $hour = htmlspecialchars($_POST['hour']);
   $salary = htmlspecialchars($_POST['salary']);

   $sql = "INSERT INTO `annonce`(`title`,`description`, `country`,`contrat`,`hour`, `salary`)
   VALUES ('$title','$description','$country','$contrat','$hour','$salary')";
$req = $pdo->prepare($sql);
$req->execute();

header( "Location:../HomeAd.php");
}

class AnnonceManager {
   
   private PDO $pdo ;

   public function __construct(PDO $pdo)
   {
      $this->pdo = $pdo;
   }

   public function getAnnonce(int $page): array 
   {
      require_once '../Modele/Annonce.php';
      $stm = $this->pdo->prepare('SELECT * FROM annonce LIMIT :start, 5');
      $stm->setFetchMode(PDO::FETCH_CLASS, 'Annonce');
      $stm->bindValue(':start', 5 * ($page -1), PDO::PARAM_INT);
      $stm->execute();

      return $stm->fetchAll();
   }
}
