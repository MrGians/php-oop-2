<?php 

class Product
{
  protected $name;
  protected $description;
  protected $price;
  protected $availability;

  public function __construct($name, $description, $price, $availability)
  {
    $this->setName($name);
    $this->setDescription($description);
    $this->setPrice($price);
    $this->setAvailability($availability);
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

  protected function setavAilability($availability)
  {
    $this->availability = $availability;
    return $this;
  }

  public function getAvailability()
  {
    return $this->availability;
  }

}

?>