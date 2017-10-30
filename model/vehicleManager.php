<?php

class vehicleManager {


// CONNECTION BDD
  public function getBdd() {
      $bdd = new PDO('mysql:host=localhost;dbname=Car_Handle;charset=utf8', 'root', 'leilalababsa');
      return $bdd;
  }


// INSERT VEHICLES IN BDD
  public function insertVehicles(vehicle $v){
    $req=$this->getBdd()->prepare('INSERT INTO vehicles(type, brand, year, color)
    VALUES(:type, :brand, :year, :color)');
    // $req->bindValue(':id', getId());
      $req->bindValue(':nom', $v->getType());
      $req->bindValue(':age', $v->getBrand(), PDO::PARAM_INT);
 $req->bindValue(':sexe', $v->getYear(), PDO::PARAM_STR);
 $req->bindValue(':couleur', $v->getColor(), PDO::PARAM_STR);
    $req->execute();
    }

// SELECT ALL FROM VEHICLES TABLE
public function getAllVehicles(){
$response=$this->getBdd()->query("SELECT * FROM vehicles");
$vehicles=$response->fetchAll(PDO::FETCH_ASSOC);
return $vehicles;
}



}


 ?>
