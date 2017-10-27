<?php
include("template/header.php");
?>

  <!--  VEHICLE CARD DETAIL -->
  <div class="row">
    <a id="button" class="waves-effect btn-large orange darken-1" href="">Ajouter un véhicule</a></p>
    <div class="col s12 m6 offset-m3 l6 offset-l3">
      <div class="card blue-grey darken-1">
        <div class="card-content white-text">
          <span class="card-title"><strong>Projet</strong></span>
          <!-- <span class="card-title"><?php echo $resultat['title']; ?></span> -->
          <!-- <p><?php echo $resultat['description']; ?></p> -->
          <!-- <p><?php echo $resultat['dead_line']; ?></p> -->
        </div>
        <div class="card-action">
          <a href="../view/formSubstep_View.php?">Supprimer ou Éditer</a>
        </div>
      </div>
    </div>
  </div>


<?php
include("template/footer.php");

?>
