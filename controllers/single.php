<?php
require ("../model/VehicleManager.php");

// CALL THE RIGHT ENTITIE FILE
function loadClass($class) {
  require("../entities/" . $class . ".php");
}
spl_autoload_register("loadClass");

// INSTANTIATION OF VehicleManager
$vehicleManager = new VehicleManager();

// WORK WITH GET
if (!empty($_GET['join'])) {
  $id =(int) $_GET['join'];
  $singleVehicle = $vehicleManager->getVehicle($id);
}

// FOREACH FOR SHOW INFOS
// $show_vehicles= $vehicleManager->getAllVehicles();
// foreach ($show_vehicles as $key => $value) {
//   $show_vehicles[$key] = new Car($value);
// }

include '../views/singleView.php';
 ?>
