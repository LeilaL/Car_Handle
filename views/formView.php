<?php
include('template/header.php');
?>

  <h5 class="header center-align">Formulaire Ajout Véhicule</h5>
  <a href="index.php" id="return"><strong>Retour</strong></a>
  <div id="form" class="container">
  <div class="row">

    <form class="col s12" action="../controllers/index.php" method="post">
      <p>Type de véhicule</p>
<p>
           <input class="with-gap" name="type" type="radio" value="voiture" id="test1" />
           <label for="test1">Voiture</label>

           <input class="with-gap" name="type" type="radio" value="camion" id="test2" />
           <label for="test2">Camion</label>

           <input class="with-gap" name="type" type="radio" value="moto" id="test3"  />
           <label for="test3">Moto</label>
         </p>

      <div class="input-field col s12 m10 l7">
        <input id="text1" name="brand" type="text" class="validate">
        <label for="text1">Marque</label>
      </div>

      <div class="input-field col s12 m10 l7">
        <input id="year" name="year" type="text" class="validate">
        <label for="year">Année</label>
      </div>

      <div class="input-field col s12 m10 l7">
        <input id="text2" name="color" type="text" class="validate">
        <label for="text2">Couleur</label>
      </div>

      <div class="input-field col s10">
        <input class="waves-effect btn orange darken-1" value="Envoyer" type="submit" name="action">
      </div>

    </form>

  </div>
</div>





<?php
include('template/footer.php');
?>
