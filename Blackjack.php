<?php

declare(strict_types=1);

class Blackjack {

    private $player = "";
    private $dealer = "";
    private $deck = "";


    // Constructor
    private function __construct(string $player, string $dealer) {
        $this->player = $player;
        $this->dealer = $dealer;
        $this->deck = new Deck; // new deck
        $this->deck->shuffle(); // shuffle method
    }


    // Getters
    public function getPlayer() {
        return $this->player;
    }

    public function getDealer() {
        return $this->dealer;
    }

    public function getDeck() {
        return $this->deck;
    }

}






?>