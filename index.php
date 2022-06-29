<?php

declare(strict_types=1);

session_start(); // https://www.w3schools.com/php/php_sessions.asp



require 'Suit.php';
require 'Card.php';
require 'Deck.php';
require 'Blackjack.php';
require 'Player.php';

//vars
if (!isset($_SESSION['blackjack'])) {
    $_SESSION['blackjack'] = new Blackjack;
}
$blackjack = unserialize(serialize($_SESSION['blackjack']));



// nice var_dump
echo '<pre>';
// var_dump($blackjack->getPlayer()->cards()); // added a cards() getter to player.php - is this allowed && || necessary?
// var_dump($blackjack->getPlayer()->getScore());  // this doesn't work 
echo '</pre>'

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
    <form action="" method="post">

        <input type="submit" name="hit" value="Hit Me!">
        <?php
        // $blackjack->getPlayer()->hit();
        if (isset($_POST["hit"])) {
            print_r("Hit button works");
            // $_SESSION['blackjack']->getPlayer()->hit($deck());
            // $player->hit($deck);
            var_dump($blackjack->getPlayer());
        }
        ?>
        </input>
    </form>

    <small>I have no idea what I'm doing now.... I have no idea what I'm doing now.... I have no idea what I'm doing now.... I have no idea what I'm doing now.... I have no idea what I'm doing now.... I have no idea what I'm doing now.... I have no idea what I'm doing now.... I have no idea what I'm doing now.... I have no idea what I'm doing now.... I have no idea what I'm doing now.... I have no idea what I'm doing now.... I have no idea what I'm doing now.... I have no idea what I'm doing now.... I have no idea what I'm doing now.... I have no idea what I'm doing now.... I have no idea what I'm doing now.... I have no idea what I'm doing now.... I have no idea what I'm doing now.... I have no idea what I'm doing now.... I have no idea what I'm doing now.... I have no idea what I'm doing now.... I have no idea what I'm doing now.... I have no idea what I'm doing now.... I have no idea what I'm doing now.... I have no idea what I'm doing now.... I have no idea what I'm doing now.... I have no idea what I'm doing now.... I have no idea what I'm doing now.... I have no idea what I'm doing now.... I have no idea what I'm doing now.... I have no idea what I'm doing now.... I have no idea what I'm doing now.... I have no idea what I'm doing now.... I have no idea what I'm doing now.... I have no idea what I'm doing now.... I have no idea what I'm doing now.... I have no idea what I'm doing now.... I have no idea what I'm doing now.... I have no idea what I'm doing now.... I have no idea what I'm doing now.... I have no idea what I'm doing now.... I have no idea what I'm doing now.... I have no idea what I'm doing now.... I have no idea what I'm doing now.... I have no idea what I'm doing now.... I have no idea what I'm doing now.... I have no idea what I'm doing now.... I have no idea what I'm doing now.... I have no idea what I'm doing now.... I have no idea what I'm doing now.... I have no idea what I'm doing now.... I have no idea what I'm doing now.... I have no idea what I'm doing now.... I have no idea what I'm doing now.... I have no idea what I'm doing now.... I have no idea what I'm doing now.... I have no idea what I'm doing now.... I have no idea what I'm doing now.... I have no idea what I'm doing now.... I have no idea what I'm doing now.... I have no idea what I'm doing now.... I have no idea what I'm doing now.... I have no idea what I'm doing now.... I have no idea what I'm doing now.... I have no idea what I'm doing now.... I have no idea what I'm doing now.... I have no idea what I'm doing now.... I have no idea what I'm doing now.... I have no idea what I'm doing now.... I have no idea what I'm doing now.... I have no idea what I'm doing now.... I have no idea what I'm doing now.... I have no idea what I'm doing now.... I have no idea what I'm doing now.... I have no idea what I'm doing now.... I have no idea what I'm doing now.... I have no idea what I'm doing now.... I have no idea what I'm doing now.... I have no idea what I'm doing now.... I have no idea what I'm doing now.... I have no idea what I'm doing now.... I have no idea what I'm doing now.... I have no idea what I'm doing now.... I have no idea what I'm doing now.... I have no idea what I'm doing now.... I have no idea what I'm doing now.... I have no idea what I'm doing now.... I have no idea what I'm doing now.... I have no idea what I'm doing now.... I have no idea what I'm doing now.... I have no idea what I'm doing now.... I have no idea what I'm doing now.... I have no idea what I'm doing now.... I have no idea what I'm doing now.... I have no idea what I'm doing now.... I have no idea what I'm doing now.... I have no idea what I'm doing now.... I have no idea what I'm doing now.... I have no idea what I'm doing now.... I have no idea what I'm doing now.... I have no idea what I'm doing now.... I have no idea what I'm doing now.... I have no idea what I'm doing now.... I have no idea what I'm doing now.... I have no idea what I'm doing now.... I have no idea what I'm doing now.... I have no idea what I'm doing now.... I have no idea what I'm doing now.... </small>
</body>

</html>




<!-- PHP notes: delete when finished :) -->
<?php
// display from play cards
// foreach ($unserialize->getPlayer()->getCards() as $card) {
//         echo $card->getUnicodeCharacter(true);
//         echo '<br>';
//     }

?>