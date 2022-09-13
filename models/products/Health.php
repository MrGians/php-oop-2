<?php 

require_once __DIR__ . '/Product.php';

class Health extends Product
{
  protected $pet_type;
  protected $pet_age;
  protected $brand;

  public function __construct($name, $description, $price, $pet_type, $pet_age, $brand)
  {
    parent::__construct($name, $description, $price);
    $this->setPetType($pet_type);
    $this->setPetAge($pet_age);
    $this->setBrand($brand);
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
    if($pet_age !== 'Adult' && $pet_age !== 'Puppy') return;

    $this->pet_age = $pet_age;
    return $this;
  }

  public function getPetAge()
  {
    return $this->pet_age;
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