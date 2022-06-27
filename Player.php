<?php

declare(strict_types=1);

class Player {

    private $cards = [];
    private $lost = False;
    
    
    public function __construct(Blackjack $deck)
        {
            $this->deck = $deck
            $this->cardOne = $cardOne;
            $this->cardTwo = $cardTwo;
            $this->cardOne = $deck->drawCard();
            $this->cardTwo = $deck->drawCard();        
        }
    

    // Getters
    public function hit()
    {
        
    }
    
    public function surrender()
    {
        
    }
    
    public function getScore()
    {
        
    }
    
    public function hasLost()
    {
        
    }



}

  
    
?>
