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
include_once __DIR__ . '/models/Food.php';
include_once __DIR__ . '/models/Health.php';
include_once __DIR__ . '/models/Toy.php';
include_once __DIR__ . '/models/Bed.php';


// Instances
$bank_account = new BankAccount('834562', 'Credit', 500);
$guest_customer = new Person('Mario', 'Rossi', 35, 'Via dei Mori n.12', $bank_account);
$customer = new Customer('Mario', 'Verdi', 22, 'Piazza Fiume n.13', $bank_account, 'Mario22', 'mario@verdi.it', 'password12345');

var_dump($bank_account);
var_dump($guest_customer);
var_dump($customer);
?>