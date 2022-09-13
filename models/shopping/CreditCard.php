<?php 

class CreditCard
{
  private $number;
  private $circuit;
  private $expiration_date;

  public function __construct($number, $circuit, $expiration_date)
  {
    $this->setNumber($number);
    $this->setCircuit($circuit);
    $this->setExpirationDate($expiration_date);
  }

  public function isExpired()
  {
    $today = date('d-m-Y');
    $expired_date = date('d-m-Y', strtotime($this->expiration_date));
    return $expired_date < $today;
  }

  protected function setNumber($number)
  {
    $this->number = $number;
    return $this;
  }

  public function getNumber()
  {
    return $this->number;
  }

  protected function setCircuit($circuit)
  {
    $this->circuit = $circuit;
    return $this;
  }

  public function getCircuit()
  {
    return $this->circuit;
  }

  protected function setExpirationDate($expiration_date)
  {
    $this->expiration_date = $expiration_date;
    return $this;
  }

  public function getExpirationDate()
  {
    return $this->expiration_date;
  }
}
$card = new CreditCard('23234', 'Visa', '15-09-2025');
var_dump($card);
var_dump($card->isExpired());
?>