<?php

declare(strict_types=1);

class Blackjack {

    private Player $player;
    private Player $dealer;
    private Deck $deck;


    // Constructor
    public function __construct() {
        $this->deck = new Deck; // new deck
        $this->deck->shuffle(); // shuffle method
        $this->player = new Player($this->deck);
        $this->dealer = new Player($this->deck);
        
    }


    // Getters (return object??)
    public function getPlayer():object {
        return $this->player;
    }

    public function getDealer():object {
        return $this->dealer;
    }

    public function getDeck() {
        return $this->deck;
    }

}






?>