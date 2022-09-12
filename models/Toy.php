<?php 

require_once __DIR__ . '/Product.php';

class Toy extends Product
{
  protected $pet_type;
  protected $material;
  protected $brand;
  protected $quantity;

  public function __construct($name, $description, $price, $availability, $pet_type, $material, $brand, $quantity)
  {
    parent::__construct($name, $description, $price, $availability);
    $this->setPetType($pet_type);
    $this->setMaterial($material);
    $this->setBrand($brand);
    $this->setQuantity($quantity);
  }

  protected function setPetType($pet_type)
  {
    if($pet_type !== 'Dog' && $pet_type !== 'Cat') return;

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

  protected function setQuantity($quantity)
  {
    if(!is_numeric($quantity) || $quantity <= 0) return;

    $this->quantity = $quantity;
    return $this;
  }

  public function getQuantity()
  {
    return $this->quantity;
  }

}

?>