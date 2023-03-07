<?php  $detail = $mission->getId(); ?>
<div class="card">
  <h5 class="card-header"><?php echo $mission->getTitle(); ?></h5>
  <div class="card-body">
    <p class="card-text"><?php echo $mission->getDescription(); ?></p>
    <p class="card-text"> Commune: <?php echo $mission->getCountry(); ?></p>
    <p class="card-text"> Type de contrat: <?php echo $mission->getContrat(); ?></p>
    <p class="card-text"> Heure par semaine: <?php echo $mission->getHour(); ?> H</p>
    <p class="card-text"> Salaire Brut : <?php echo $mission->getSalary(); ?> €</p>
    <!-- <a href="Detail.php?$detail=<?php //echo $detail; ?>" class="btn btn-primary">Voir le détail</a>-->
  </div>
</div>