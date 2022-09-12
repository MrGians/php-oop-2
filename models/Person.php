<?php 

class Person
{
  private $first_name;
  private $last_name;
  private $age;
  private $address;
  private $bank_account;

  public function __construct($first_name, $last_name, $age, $address, $bank_account)
  {
    $this->setFirstName($first_name);
    $this->setLastName($last_name);
    $this->setAge($age);
    $this->setAddress($address);
    $this->setBankAccount($bank_account);
  }

  public function setFirstName($first_name)
  {
    $this->first_name = $first_name;
    return $this;
  }

  public function getFirstName()
  {
    return $this->first_name;
  }

  public function setLastName($last_name)
  {
    $this->last_name = $last_name;
    return $this;
  }

  public function getLastName()
  {
    return $this->last_name;
  }

  public function setAge($age)
  {
    $this->age = $age;
    return $this;
  }

  public function getAge()
  {
    return $this->age;
  }

  public function setAddress($address)
  {
    $this->address = $address;
    return $this;
  }

  public function getAddress()
  {
    return $this->address;
  }

  public function setBankAccount($bank_account)
  {
    $this->bank_account = $bank_account;
    return $this;
  }

  public function getBankAccount()
  {
    return $this->bank_account;
  }
}

?>