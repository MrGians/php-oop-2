<?php 

require_once __DIR__ . '/Product.php';

class Food extends Product
{
  protected $pet_age;
  protected $food_type;
  protected $quantity;

  public function __construct($name, $description, $price, $pet_types, $brand, $pet_age, $food_type, $quantity)
  {
    parent::__construct($name, $description, $price, $pet_types, $brand);
    $this->setPetAge($pet_age);
    $this->setFoodType($food_type);
    $this->setQuantity($quantity);
  }

  protected function setPetAge($pet_age)
  {
    if($pet_age !== 'Adult' && $pet_age !== 'Puppy') return;

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