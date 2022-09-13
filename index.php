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
// # Products
include_once __DIR__ . '/models/products/Food.php';
include_once __DIR__ . '/models/products/Health.php';
include_once __DIR__ . '/models/products/Toy.php';
include_once __DIR__ . '/models/products/Bed.php';

// # Address & CreditCard
include_once __DIR__ . '/models/shipping/Address.php';
include_once __DIR__ . '/models/shopping/CreditCard.php';

// # Customer (Guest) & RegisteredCustomer
include_once __DIR__ . '/models/customers/Customer.php';
include_once __DIR__ . '/models/customers/RegisteredCustomer.php';

// | Product Instances
$dog_bed = new Bed('Cuccia Grande', 'Cuccia grande per cani.', 24.99, ['Dog'], 'Arcaplanet', 'Cotton', '50x36x74');
$dog_food = new Food('Bocconcini di Manzo', 'Bocconcini con Manzo di prima scelta!', 10, ['Dog'], 'Arcaplanet', 'Adult', 'Dry', 3.5);
$dog_health = new Health('Collare Antizanzare', 'Collare Antizanzare per Cani.', 30, ['Dog'], 'Arcaplanet', 'Adult');
$dog_toy = new Toy('Osso di Gomma', 'Gustosissimo Osso di gomma per cani!', 6, ['Dog'], 'Arcaplanet', 'Rubber', 1);
$cat_bed = new Bed('Cuscino Piccolo', 'Cuscino piccolo per gatti.', 14.99, ['Cat'], 'Arcaplanet', 'Cotton', '20x12x24');
$cat_food = new Food('Patè di Merluzzo', 'Patè di Merluzzo per gatti fino ai 12 mesi.', 6.99, ['Cat'], 'Arcaplanet', 'Puppy', 'Wet', 0.3);
$cat_health = new Health('Lozione Antipulci', 'Lozione Antipulci per Gatti.', 30, ['Cat'], 'Arcaplanet', 'Adult');
$cat_toy = new Toy('Set x5 Gomitolo di lana', 'Set di Gomitoli di lana contenente 5 pezzi.', 12, ['Cat'], 'Arcaplanet', 'Wool', 5);
// var_dump($dog_bed, $dog_food, $dog_health, $dog_toy,$cat_bed, $cat_food, $cat_health, $cat_toy);

// | Address & CreditCard Instances
$address = new Address('Mario', 'Rossi', 'Piazza Italia, 12', '07100', 'Sassari', 'Italia');
$credit_card = new CreditCard('592095', 'Mastercard', '15-09-2022');

// | Customer Instances
$guest_customer = new Customer();
$registered_customer = new RegisteredCustomer('Mister Mario24', 'mario@mister.it', $address, $credit_card);



$client = $registered_customer;

// Order Simulation
echo '<h3>Ordine Completo:</h3><br/>';
$client->addToCart($dog_bed);
$client->addToCart($dog_bed);
$client->placeOrder($address, $credit_card);
// !! var_dump() from Order.php => performPayment();


?>