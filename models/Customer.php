<?php 

include_once __DIR__ . '/Person.php';

class Customer extends Person
{
  private $username;
  private $email;
  private $password;
  private $discount;
  private $wish_list;

  public function __construct($first_name, $last_name, $age, $address, $bank_account, $username, $email, $password, $discount, $wish_list)
  {
    parent::__construct($first_name, $last_name, $age, $address, $bank_account);
    $this->setUsername($username);
    $this->setEmail($email);
    $this->setPassword($password);
    $this->setDiscount($discount);
    $this->setWishList($wish_list);
  }

  public function setUsername($username)
  {
    $this->username = $username;
    return $this;
  }

  public function getUsername()
  {
    return $this->username;
  }

  public function setEmail($email)
  {
    $this->email = $email;
    return $this;
  }

  public function getEmail()
  {
    return $this->email;
  }

  public function setPassword($password)
  {
    $this->password = $password;
    return $this;
  }

  public function getPassword()
  {
    return $this->password;
  }

  public function setDiscount($discount)
  {
    $this->discount = $discount;
    return $this;
  }

  public function getDiscount()
  {
    return $this->discount;
  }

  public function setWishList($wish_list)
  {
    $this->wish_list = $wish_list;
    return $this;
  }

  public function getWishList()
  {
    return $this->wish_list;
  }
}

?>