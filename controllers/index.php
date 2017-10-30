<?php
require ("../model/VehicleManager.php");


function loadClass($class) {
  require("../entities/" . $class . ".php");
}
spl_autoload_register("loadClass");

$vehicleManager = new VehicleManager();

// faire les verifs ici / securisation bdd htmlspecialchars
//  INSERT IN BDD
$vehicle = new Car(
['type' => $_POST['type'],
'brand' => $_POST['brand'],
'year' => $_POST['year'],
'color' => $_POST['color']]);
$vehicleManager->insertVehicles($vehicle);

// FOREACH FOR SHOW INFOS
$vehicles= $vehicleManager->getAllVehicles();
foreach ($vehicles as $key => $value) {
  $vehicles[$key] = new Car($value);
}

include "../views/indexView.php";
 ?>
