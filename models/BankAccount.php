<?php

class BankAccount
{
  protected $number;
  protected $type;
  protected $balance;
  protected $expiration_date;

  public function __construct($number, $type, $balance, $expiration_date)
  {
    $this->setNumber($number);
    $this->setType($type);
    $this->setBalance($balance);
    $this->setExpirationDate($expiration_date);
  }

  private function setNumber($number)
  {
    $this->number = $number;
    return $this;
  }

  public function getNumber()
  {
    return $this->number;
  }

  private function setType($type)
  {
    $this->type = $type;
    return $this;
  }

  public function getType()
  {
    return $this->type;
  }

  private function setBalance($balance)
  {
    $this->balance = $balance;
    return $this;
  }

  public function getBalance()
  {
    return $this->balance;
  }

  private function setExpirationDate($expiration_date)
  {
    $this->expiration_date = $expiration_date;
    return $this;
  }

  public function getExpirationDate()
  {
    return $this->expiration_date;
  }

  public function checkDeposit($_amount){
    if(!is_numeric($_amount) || $_amount <= 0) return false;

    $this->balance += $_amount;
    return true;
  }

  public function checkWithdraw($_amount){
    if(!is_numeric($_amount) || $_amount <= 0 || $this->balance < $_amount) return false;

    $this->balance -= $_amount;
    return true;
  }
}