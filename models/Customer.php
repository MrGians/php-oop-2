<?php 

include_once __DIR__ . '/Person.php';

class Customer extends Person
{
  protected $username;
  protected $email;
  protected $password;
  protected $discount;

  public function __construct($first_name, $last_name, $age, $address, $bank_account, $username, $email, $password)
  {
    parent::__construct($first_name, $last_name, $age, $address, $bank_account);
    $this->setUsername($username);
    $this->setEmail($email);
    $this->setPassword($password);
  }

  protected function setUsername($username)
  {
    $this->username = $username;
    return $this;
  }

  public function getUsername()
  {
    return $this->username;
  }

  protected function setEmail($email)
  {
    $this->email = $email;
    return $this;
  }

  public function getEmail()
  {
    return $this->email;
  }

  protected function setPassword($password)
  {
    $this->password = $password;
    return $this;
  }

  protected function getPassword()
  {
    return $this->password;
  }

  protected function setDiscount($discount)
  {
    $this->discount = $discount;
    return $this;
  }

  public function getDiscount()
  {
    return $this->discount;
  }
}

?>