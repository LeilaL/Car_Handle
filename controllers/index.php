<?php

function loadClass($class) {
  require("../entities/" . $class . ".php");
}
spl_autoload_register("loadClass");

$the_vehicle = new Vehicle();

include "../views/indexVue.php";
 ?>
