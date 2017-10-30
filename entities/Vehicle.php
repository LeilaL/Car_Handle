<?php
declare(strict_types=1);

abstract class Vehicle {
  protected $type;
  protected $brand;
  protected $year;
  protected $color;

const COLOR = [
  1 => "noir",
  2 => "gris",
  3 => "blanc",
  4 => "rouge",
  5 => "bleu"
];

// SETTERS
  public function setType($type) {
      $this->type = $type;
  }

  public function setBrand($brand) {
      $this->brand = $brand;
  }

  public function setYear($year) {
    $this->year = $year;
  }

  public function setColor($color) {
    $this->color = $color;
  }


  // GETTERS

  public function getType() {
    return $this->type;
  }

  public function getBrand() {
    return $this->brand;
  }

  public function getYear() {
    return $this->year;
  }

  public function getColor() {
    return $this->color;
  }


  // METHODS
  public function hydrate($data){
    foreach ($data as $key => $value) {
      $method = "set" .ucfirst($key);
      if(method_exists($this, $method)){
        $this->$method($value);
      }
    }
  }

  public function __construct($data) {
$this->hydrate($data);
  }


}

 ?>
