<?php
include("template/header.php");
?>

<?php
foreach ($show_vehicles as $infosvehicle) {
  ?>

  <!--  VEHICLE CARD DETAILS -->
  <div class="row">
    <a id="button" class="waves-effect btn-large orange darken-1" href="form.php">Ajouter un véhicule</a></p>
    <div class="col s12 m6 offset-m3 l6 offset-l3">
      <div class="card blue-grey darken-1">
        <div class="card-content white-text">
          <span class="card-title"><strong>Projet</strong></span>
          <span class="card-title"><?php echo $infosvehicle->getType()?></span>
          <p><?php echo $infosvehicle->getBrand()?></p>
          <p><?php echo $infosvehicle->getYear()?></p>
          <p><?php echo $infosvehicle->getColor()?></p>
        </div>
        <div class="card-action">
          <a href="../view/formSubstep_View.php?">Supprimer ou Éditer</a>
        </div>
      </div>
    </div>
  </div>


<?php
}
include("template/footer.php");

?>
