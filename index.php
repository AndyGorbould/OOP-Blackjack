<?php
session_start(); // https://www.w3schools.com/php/php_sessions.asp

declare(strict_types=1);


require 'Suit.php';
require 'Card.php';
require 'Deck.php';
require 'Blackjack.php';
require 'Player.php';

// $deck = new Deck();
// $deck->shuffle();
// foreach($deck->getCards() AS $card) {
//     echo $card->getUnicodeCharacter(true);
//     echo '<br>';
// }

$blackjack = new Blackjack;





// var_dump($blackjack->getPlayer());

// $blackjack = new Blackjack();
// $blackjack->getPlayer();
// $blackjack->getDeck();
// $blackjack->getPlayer()->getCards();

// echo $blackjack->getScore;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blackjack</title>
</head>
<body>
    <p>hello</p>
    <h2><?php
    // foreach ($unserialize->getPlayer()->getCards() as $card) {
    //             echo $card->getUnicodeCharacter(true);
    // };
    // // echo $blackjack->getScore();
    ?>
    </h2>
    
</body>
</html>





<?php
// display from play cards
// foreach ($unserialize->getPlayer()->getCards() as $card) {
//         echo $card->getUnicodeCharacter(true);
//         echo '<br>';
//     }

    ?>