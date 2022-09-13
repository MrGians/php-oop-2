<?php 

require_once __DIR__ . '/Product.php';

class Health extends Product
{
  protected $pet_age;

  public function __construct($name, $description, $price, $pet_types, $brand, $pet_age)
  {
    parent::__construct($name, $description, $price, $pet_types, $brand);
    $this->setPetAge($pet_age);
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

}

?>