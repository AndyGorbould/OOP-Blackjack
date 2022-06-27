<?php

declare(strict_types=1);

class Player {

    private array $cards = [];
    private bool $lost = False;
    
    
    public function __construct(Deck $deck)
        {
            array_push($this->cards, $deck->drawCard());
            array_push($this->cards, $deck->drawCard());

        }
    

    // Getters
    public function hit()
    {
        array_push($this->cards, $this->deck->drawCard());
    }
    
    public function surrender()
    {
        return $lost = True;   
    }
    
    public function getScore($cardOne, $cardTwo)
    {
        foreach ($cards as $card) {
            getRawValue();
            // combine values, if>21 return $lost = True, if<=21 return $lost = False (win) 

        }
    }
    
    public function hasLost()
    {
        return $lost = True;   
    }



}

  
    
?>
