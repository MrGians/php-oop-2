<?php 

include_once __DIR__ . '/../shopping/Cart.php';
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

}
?>