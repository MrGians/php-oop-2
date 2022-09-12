<?php

class BankAccount
{
  protected $number;
  protected $type;
  protected $balance;
  protected $expiration_date;

  public function __construct($number, $type, $balance)
  {
    $this->setNumber($number);
    $this->setType($type);
    $this->setBalance($balance); // Balance deliberately hard-coded
  }

  private function setNumber($number)
  {
    if(!is_numeric($number) || strlen($number) !== 6) return;
    $this->number = $number;
    // When the card is created, the expiration date is also created
    $this->setExpirationDate();
    return $this;
  }

  public function getNumber()
  {
    return $this->number;
  }

  private function setType($type)
  {
    if($type !== 'Credit' && $type !== 'Debit') return;

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

  private function setExpirationDate()
  {
    $expiration_date = date('Y-m', strtotime(' + 5 years'));
    $this->expiration_date = $expiration_date;
    return $this;
  }

  public function getExpirationDate()
  {
    return $this->expiration_date;
  }

  public function cardPayment($amount){
    if(!is_numeric($amount) || $amount < 0 || $this->balance < $amount) return false;

    $this->balance -= $amount;
    return true;
  }
}