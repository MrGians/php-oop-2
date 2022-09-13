<?php 

class Product
{
  protected $name;
  protected $description;
  protected $price;
  protected $pet_types;
  protected $brand;

  public function __construct($name, $description, $price, $pet_types, $brand)
  {
    $this->setName($name);
    $this->setDescription($description);
    $this->setPrice($price);
    $this->setPetTypes($pet_types);
    $this->setBrand($brand);

  }

  protected function setName($name)
  {
    $this->name = $name;
    return $this;
  }

  public function getName()
  {
    return $this->name;
  }

  protected function setDescription($description)
  {
    $this->description = $description;
    return $this;
  }

  public function getDescription()
  {
    return $this->description;
  }

  protected function setPrice($price)
  {
    $this->price = $price;
    return $this;
  }

  public function getPrice()
  {
    return $this->price;
  }

  protected function setPetTypes($pet_types)
  {
    if(!in_array("Dog", $pet_types) && !in_array("Cat", $pet_types)) return;

    $this->pet_types = $pet_types;
    return $this;
  }

  public function getPetTypes()
  {
    return $this->pet_types;
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

}

?>