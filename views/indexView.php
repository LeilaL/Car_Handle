<?php
  include("template/header.php")
 ?>
 <main id="main">

<!-- VEHICULE CARD -->
   <div class="container-fluid">
     <div class="row">
       <a id="button" class="waves-effect btn-large orange darken-1" href="form.php">Ajouter un véhicule</a></p>
       <?php foreach ($vehicles as $vehicle) {
         ?>
         <div class="col s12 m4 l4">
           <div class="card blue-grey darken-1">
             <div class="card-content white-text">
               <span class="card-title"><strong>Véhicule</strong></span>
               <span class="card-title"><?php echo $vehicle->getType()?></span>
               <p><?php echo $vehicle->getBrand()?></p>
               <p><?php echo $vehicle->getYear()?></p>
               <p><?php echo $vehicle->getColor()?></p>
             </div>
             <div class="card-action">
               <a href="single.php">Voir le véhicule détaillé</a>
             </div>
           </div>
         </div>
         <?php }
        //  header(refresh)
         ?>
     </div>
   </div>


 </main>

 <?php
   include("template/footer.php")
  ?>
