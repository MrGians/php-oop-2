<?php 

require_once __DIR__ . '/Product.php';

class Food extends Product
{
  protected $pet_type;
  protected $pet_age;
  protected $food_type;
  protected $quantity;

  public function __construct($name, $description, $price, $availability, $pet_type, $pet_age, $food_type, $quantity)
  {
    parent::__construct($name, $description, $price, $availability);
    $this->setPetType($pet_type);
    $this->setPetAge($pet_age);
    $this->setFoodType($food_type);
    $this->setQuantity($quantity);
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

  protected function setPetAge($pet_age)
  {
    $this->pet_age = $pet_age;
    return $this;
  }

  public function getPetAge()
  {
    return $this->pet_age;
  }

  protected function setFoodType($food_type)
  {
    $this->food_type = $food_type;
    return $this;
  }

  public function getFoodType()
  {
    return $this->food_type;
  }

  protected function setQuantity($quantity)
  {
    $this->quantity = $quantity;
    return $this;
  }

  public function getQuantity()
  {
    return $this->quantity;
  }

}

?>