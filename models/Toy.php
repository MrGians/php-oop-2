<?php 

require_once __DIR__ . '/Product.php';

class Toy extends Product
{
  protected $pet_type;
  protected $material;
  protected $brand;
  protected $pieces;

  public function __construct($name, $description, $price, $availability, $pet_type, $material, $brand, $pieces)
  {
    parent::__construct($name, $description, $price, $availability);
    $this->setPetType($pet_type);
    $this->setMaterial($material);
    $this->setBrand($brand);
    $this->setPieces($pieces);
  }

  protected function setPetType($pet_type)
  {
    $this->pet_type = $pet_type;
    return $this;
  }

  public function getPetType()
  {
    return $this->pet_type;
  }

  protected function setMaterial($material)
  {
    $this->material = $material;
    return $this;
  }

  public function getMaterial()
  {
    return $this->material;
  }

  protected function setBrand($brand)
  {
    $this->brand = $brand;
    return $this;
  }

  public function getBrand()
  {
    return $this->brand;
  }

  protected function setPieces($pieces)
  {
    $this->pieces = $pieces;
    return $this;
  }

  public function getPieces()
  {
    return $this->pieces;
  }

}

?>