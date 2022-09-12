<?php 

include_once __DIR__ . '/BankAccount.php';
class Person
{
  protected $first_name;
  protected $last_name;
  protected $age;
  protected $address;
  protected $bank_account;

  public function __construct($first_name, $last_name, $age, $address, $bank_account)
  {
    $this->setFirstName($first_name);
    $this->setLastName($last_name);
    $this->setAge($age);
    $this->setAddress($address);
    $this->setBankAccount($bank_account);
  }

  protected function setFirstName($first_name)
  {
    $this->first_name = $first_name;
    return $this;
  }

  public function getFirstName()
  {
    return $this->first_name;
  }

  protected function setLastName($last_name)
  {
    $this->last_name = $last_name;
    return $this;
  }

  public function getLastName()
  {
    return $this->last_name;
  }

  public function getFullName()
  {
    return "{$this->first_name} {$this->last_name}";
  }

  protected function setAge($age)
  {
    if(!is_numeric($age) || $age <= 0) return;
    
    $this->age = $age;
    return $this;
  }

  public function getAge()
  {
    return $this->age;
  }

  protected function setAddress($address)
  {
    $this->address = $address;
    return $this;
  }

  public function getAddress()
  {
    return $this->address;
  }

  private function setBankAccount($account)
  {
    if($account instanceof BankAccount) $this->bank_account = $account;
    return $this;
  }

  public function getBankAccount()
  {
    return $this->bank_account;
  }
}

?>