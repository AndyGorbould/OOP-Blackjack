<?php

declare(strict_types=1);

class Player {

    private $cards = [];
    private $lost = False;
    
    
    public function __construct(Blackjack $deck)
        {
            $this->deck = $deck
            // $cardOne = Deck::drawCard();
            // $cardTwo = Deck::drawCard();
            
            public function drawCard(): Deck; {
                return $cards = &$this->card;
            }
        }
    

    // Getters
    public function hit()
    {
        Deck::drawCard();
    }
    
    public function surrender()
    {
        return $lost = True;   
    }
    
    public function getScore()
    {
        foreach ($cards as $card) {
            getValue();
            // combine values, if>21 return $lost = True, if<=21 return $lost = False (win) 

        }
    }
    
    public function hasLost()
    {
        return $lost = True;   
    }



}

  
    
?>
