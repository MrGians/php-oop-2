<?php 

include_once __DIR__ . '/../shopping/Cart.php';
include_once __DIR__ . '/../shopping/Order.php';
class Customer
{
  protected $cart;

  public function __construct()
  {
    $this->setCart();
  }


  protected function setCart()
  {
    $this->cart = new Cart();
  }

  public function getCart()
  {
    return $this->cart;
  }

  public function addToCart($product)
  {
    $this->cart->addProduct($product);
  }

  public function removeFromCart($product)
  {
    $this->cart->removeProduct($product);
  }

  public function placeOrder($address, $credit_card)
  {
    $products = $this->cart->getProducts();
    $amount = $this->cart->getTotal();
    try {
      $order = new Order($address, $credit_card, $products, $amount);
      $order->performPayment();
    } catch (Exception $e) {
      echo "Error: {$e->getMessage()}";
    }
  }

}
?>