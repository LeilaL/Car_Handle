<?php
require ("../model/VehicleManager.php");

function loadClass($class) {
  require("../entities/" . $class . ".php");
}
spl_autoload_register("loadClass");
// $show_cardVehicle = getAllVehicles();

$vehicleManager = new VehicleManager();
// FOREACH FOR SHOW INFOS
$vehicles= $vehicleManager->getAllVehicles();
foreach ($vehicles as $key => $value) {
  $vehicles[$key] = new Car($value);
}

include '../views/singleView.php';
 ?>
