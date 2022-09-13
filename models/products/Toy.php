<?php 

require_once __DIR__ . '/Product.php';

class Toy extends Product
{
  protected $material;
  protected $quantity;

  public function __construct($name, $description, $price, $pet_types, $brand, $material, $quantity)
  {
    parent::__construct($name, $description, $price, $pet_types, $brand);
    $this->setMaterial($material);
    $this->setQuantity($quantity);
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