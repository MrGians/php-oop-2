<?php 

require_once __DIR__ . '/../shipping/Address.php';
require_once __DIR__ . '/CreditCard.php';
require_once __DIR__ . '/../products/Product.php';

class Order
{
  private $address;
  private $credit_card;
  private $products;
  private $amount;
  private $status;

  public function __construct($address, $credit_card, $products, $amount)
  {
    $this->setAddress($address);
    $this->setCreditCard($credit_card);
    $this->setProducts($products);
    $this->setAmount($amount);
    $this->setStatus();
  }

  protected function setAddress($address)
  {
    if(!($address instanceof Address)) throw new Exception('$address must be instance of Address');
    $this->address = $address;
  }

  public function getAddress()
  {
    return $this->address;
  }

  protected function setCreditCard($credit_card)
  {
    if(!($credit_card instanceof CreditCard)) throw new Exception('$credit_card must be instance of CreditCard');
    $this->credit_card = $credit_card;
  }

  public function getCreditCard()
  {
    return $this->credit_card;
  }

  protected function setProducts($products)
  {
    array_filter($products, function($product){
      if(!($product instanceof Product)) throw new Exception('$product');
    });

    $this->products = $products;
    
  }

  public function getProducts()
  {
    return $this->products;
  }

  protected function setAmount($amount)
  {
    if(!is_numeric($amount) || $amount <= 0) throw new Exception('$amount must be positive number');
    $this->amount = number_format($amount, 2);
    return $this;
  }

  public function getAmount()
  {
    return $this->amount;
  }

  protected function setStatus($status = 'pending')
  {
    $this->status = $status;
    return $this;
  }

  public function getStatus()
  {
    return $this->status;
  }

  public function performPayment()
  {
    if($this->credit_card->isExpired()) throw new Exception('Card is Expired');
    // TODO
    var_dump($this);
  }
}

?>