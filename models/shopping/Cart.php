<?php 

require_once __DIR__ . '/../products/Product.php';

class Cart
{
  private $products = [];

  public function addProduct($product)
  {
    if(!($product instanceof Product)) throw new Exception('$product must be instance of Product');
    $this->products[] = $product;
  }

  public function removeProduct($product)
  {
    if(!($product instanceof Product)) throw new Exception('$product must be instance of Product');
    
    $id = $product->getId();

    foreach($this->products as $index => $product){
      if($id === $product->getId()) unset($this->products[$index]);
    }
  }

  public function getProducts()
  {
    if(!(count($this->products))) throw new Exception('Error. $this->products is Empty');

    return $this->products;
  }

  public function getTotal()
  {
    if(!(count($this->products))) throw new Exception('Error. $this->products is Empty');

    $total = 0;
    foreach ($this->products as $product) {
      $price = $product->getPrice();
      $total += $price;
    }
    return $total;
  }
}
?>