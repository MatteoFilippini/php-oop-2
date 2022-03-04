<!-- 
    Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare
uno shop online con le seguenti caratteristiche:
L'e-commerce vende prodotti per gli animali.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e
ricevere il 20% di sconto su tutti i prodotti.
Il pagamento avviene con la carta di credito, che non deve essere scaduta.

Cerchiamo di fare un po' di analisi aiutandoci con qualche schemino (Sulla carta o su draw.io et similia)
Occupiamoci di una classe alla volta, procedendo con le classi via via relazionate tra loro
Non preoccupatevi subito della visibilità: in un primo momento potete lasciare tutto in public e poi man mano ragionare su cosa sia meglio.
Lasciamo perdere la validazione coi type hint: in questa fase ci sporcano il codice rendendo la lettura più difficile. Potrete aggiungerli una volta soddisfatti del lavoro finale!
Non cercate di strafare, concentratevi sulle classi e le loro proprietà metodi, se riuscite a istanziare e far vedere i var_dump in pagina come fatto in classe va più che bene
 -->

<?php
require_once 'UserLogin.php';
require_once 'CreditCard.php';
require_once 'Eat.php';

$credit_card = new CreditCard('432432423', '343', 2025, 100);
$credit_card_login = new CreditCard('9999999', '343', 2023, 100);

$user = new User('Leonardo', 'Filippini', 33, $credit_card, $login = false);
$user_login = new UserLogin('Luca', 'Scandi', 40,  $credit_card_login, 'email', 'pass', $login = true);

$cibo = new Eat('croccantini', 10, 'cani', '2023');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3><?= 'Benvenuto ' . $user->getName(); ?></h3>
    <p><?= $user->buyProduct($cibo->getPrice(), $cibo->getName(), $credit_card->getDate(), $user->getLogin()) ?></p>
    <p><?= 'Costano ' . $cibo->getPrice() . ' euro' ?></p>
</body>

</html>