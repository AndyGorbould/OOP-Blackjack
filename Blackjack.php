<?php

declare(strict_types=1);

class Blackjack {

    private array $player = [];
    private array $dealer = [];
    private array $deck = [];


    // Constructor
    private function __construct(string $player, string $dealer) {
        $this->player = $player;
        $this->dealer = $dealer;
        $this->deck = new Deck; // new deck
        $this->deck->shuffle(); // shuffle method
        $this->player = array_push($deck[0]);
        $this->deck = array_shift($deck);
        
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