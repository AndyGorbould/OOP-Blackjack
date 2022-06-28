<?php

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
var_dump($blackjack->getPlayer());

// $blackjack = new Blackjack();
// $blackjack->getPlayer();
// $blackjack->getDeck();
// $blackjack->getPlayer()->getCards();




?>