<?php 

require_once __DIR__ . '/Product.php';

class Bed extends Product
{
  protected $material;
  protected $size;

  public function __construct($name, $description, $price, $pet_types, $brand, $material, $size)
  {
    parent::__construct($name, $description, $price, $pet_types, $brand);
    $this->setMaterial($material);
    $this->setSize($size);
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

  protected function setSize($size)
  {
    $this->size = $size;
    return $this;
  }

  public function getSize()
  {
    return $this->size;
  }

}

?>