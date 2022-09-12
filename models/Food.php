<?php 

require_once __DIR__ . '/Product.php';

class Food extends Product
{
  protected $pet_type;
  protected $pet_age;
  protected $food_type;
  protected $quantity;

  public function __construct($name, $description, $price, $pet_type, $pet_age, $food_type, $quantity)
  {
    parent::__construct($name, $description, $price);
    $this->setPetType($pet_type);
    $this->setPetAge($pet_age);
    $this->setFoodType($food_type);
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

  protected function setPetAge($pet_age)
  {
    if(!is_numeric($pet_age) || $pet_age <= 0) return;

    $this->pet_age = $pet_age;
    return $this;
  }

  public function getPetAge()
  {
    return $this->pet_age;
  }

  protected function setFoodType($food_type)
  {
    if($food_type !== 'Wet' && $food_type !== 'Dry') return;
    
    $this->food_type = $food_type;
    return $this;
  }

  public function getFoodType()
  {
    return $this->food_type;
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