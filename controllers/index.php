<?php
require ("../model/VehicleManager.php");

// CALL THE RIGHT ENTITIE FILE
function loadClass($class) {
  require("../entities/" . $class . ".php");
}
spl_autoload_register("loadClass");


// INSTANTIATION OF VehicleManager
$vehicleManager = new VehicleManager();
// faire les verifs ici / securisation bdd htmlspecialchars

// INSTANTIATIONOF THE RIGHT CLASS + INSERT IN BDD

// $vehicle = new Car(
// 'brand' => $_POST['brand'],
// 'year' => $_POST['year'],
// 'color' => $_POST['color']]);
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

include "../views/indexView.php";
 ?>
