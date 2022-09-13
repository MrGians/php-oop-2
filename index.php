<!-- 
Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche.
L'e-commerce vende prodotti per gli animali.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.
Il pagamento avviene con la carta di credito, che non deve essere scaduta.

BONUS:
Alcuni prodotti (es. antipulci) avranno la caratteristica che saranno disponibili solo in un periodo particolare
(es. da maggio ad agosto). 
-->

<?php 

// Bank Account
include_once __DIR__ . '/models/BankAccount.php';
// Person (Not Registered) & Customer (Registered)
include_once __DIR__ . '/models/Person.php';
include_once __DIR__ . '/models/Customer.php';

// Products
include_once __DIR__ . '/models/products/Food.php';
include_once __DIR__ . '/models/products/Health.php';
include_once __DIR__ . '/models/products/Toy.php';
include_once __DIR__ . '/models/products/Bed.php';


// Client Instances
$bank_account = new BankAccount('834562', 'Credit', 500);
$guest_customer = new Person('Mario', 'Rossi', 35, 'Via dei Mori n.12', $bank_account);
$customer = new Customer('Mario', 'Verdi', 22, 'Piazza Fiume n.13', $bank_account, 'Mario22', 'mario@verdi.it', 'password12345');

// Product Instances
$dog_bed = new Bed('Cuccia Grande', 'Cuccia grande per cani.', 24.99, 'Dog', 'Cotton', 'Arcaplanet', '50x36x74');
$dog_food = new Food('Bocconcini di Manzo', 'Bocconcini con Manzo di prima scelta!', 10, 'Dog', 'Adult', 'Dry', 3.5);
$dog_health = new Health('Collare Antizanzare', 'Collare Antizanzare per Cani.', 30, 'Dog', 'Adult', 'Arcaplanet');
$dog_toy = new Toy('Osso di Gomma', 'Gustosissimo Osso di gomma per cani!', 6, 'Dog', 'Rubber', 'Arcaplanet', 1);
$cat_bed = new Bed('Cuscino Piccolo', 'Cuscino piccolo per gatti.', 14.99, 'Cat', 'Cotton', 'Arcaplanet', '20x12x24');
$cat_food = new Food('Patè di Merluzzo', 'Patè di Merluzzo per gatti fino ai 12 mesi.', 6.99, 'Cat', 'Puppy', 'Wet', 0.3);
$cat_health = new Health('Lozione Antipulci', 'Lozione Antipulci per Gatti.', 30, 'Cat', 'Adult', 'Arcaplanet');
$cat_toy = new Toy('Set x5 Gomitolo di lana', 'Set di Gomitoli di lana contenente 5 pezzi.', 12, 'Cat', 'Wool', 'Arcaplanet', 5);
// var_dump($dog_bed, $dog_food, $dog_health, $dog_toy,$cat_bed, $cat_food, $cat_health, $cat_toy);


// Receive the sum of the price of the products
function getTotalCartPrice($products){

  $cart = [...$products];
  $total = 0;

  foreach ($cart as $product) {
    $price = $product->getPrice();
    $total += $price;
  }

  return $total;
};



// !! Change in $customer or $guest_customer
$client = $customer;

// # Payment logic
// | Cart Total - add o remove product from $total
$total = getTotalCartPrice([$dog_food, $cat_food, $cat_toy]);

if (is_numeric($total) && $total > 0) {
  echo "<strong>Totale prodotti nel carrello: €$total</strong><br/>";
  
  // Apply Discount if available
  if ($client instanceof Customer) {
    $total = $total / 100 * (100 - $client->getDiscount());
    echo "Hai ricevuto uno sconto sul totale del: {$client->getDiscount()}%<br/>";
  }

  $total = number_format($total, 2);
  echo "<strong>Nuovo Totale: €$total</strong><br/>";

  if($client->payWithCard($total)) echo "<strong>Pagamento con Carta di €$total Riuscito!</strong> <br/>";
  else echo "<strong>Pagamento con Carta di €$total Fallito.</strong> <br/>";


} else {
  echo 'Impossibile calcolare il totale del carrello.';
};


?>