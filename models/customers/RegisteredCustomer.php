<?php 

include_once __DIR__ . '/Customer.php';

class RegisteredCustomer extends Customer
{
  protected $username;
  protected $email;
  protected $address;
  protected $credit_card;

  public function __construct($username, $email, $address, $credit_card)
  {
    $this->setCart();
    $this->setUsername($username);
    $this->setEmail($email);
    $this->setAddress($address);
    $this->setCreditCard($credit_card);
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


  public function placeOrder($address = null, $credit_card = null)
  {
    if(!$address) $address = $this->address;
    if(!$address) $credit_card = $this->credit_card;
    $products = $this->cart->getProducts();
    $amount = $this->cart->getTotal() * 0.80; // Discount 20%
    try {
      $order = new Order($address, $credit_card, $products, $amount);
      $order->performPayment();
    } catch (Exception $e) {
      echo "Error: {$e->getMessage()}";
    }
  }
}

?>