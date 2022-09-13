<?php 

include_once __DIR__ . '/Person.php';

class Customer extends Person
{
  protected $username;
  protected $email;
  protected $password;
  protected $discount = 20;

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
    if(!strpos($email, '@') || !strpos($email, '.')) return;
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

  public function getDiscount()
  {
    return $this->discount;
  }
}

?>