<?php
require ("../model/VehicleManager.php");

// CALL THE RIGHT ENTITIE FILE
function loadClass($class) {
  require("../entities/" . $class . ".php");
}
spl_autoload_register("loadClass");


// INSTANTIATION OF VehicleManager
$vehicleManager = new VehicleManager();



// INSTANTIATION OF THE RIGHT CLASS + INSERT IN BDD
if (!empty($_POST)) {
$type_vehicle = ucfirst($_POST['type']);
$vehicle = new $type_vehicle($_POST);
$vehicleManager->insertVehicles($vehicle);
}

// FOREACH FOR SHOW INFOS
$show_vehicles= $vehicleManager->getAllVehicles();
foreach ($show_vehicles as $key => $value) {
  $show_vehicles[$key] = new Car($value);
}

// DELETE
if(isset($_GET['delete'])){
  $id_delete=$_GET['delete'];
  $donnees = $vehicleManager->deleteVehicle($id_delete);
}

include "../views/indexView.php";
 ?>
