<?php

declare(strict_types=1);

class Player {

    private array $cards = [];
    private bool $lost = False;
    private int $score = 0;
    
    
    public function __construct(Deck $deck)
        {
            array_push($this->cards, $deck->drawCard());
            array_push($this->cards, $deck->drawCard());

        }
    

    // Getters
    public function hit($deck)
    {
        array_push($this->cards, $deck->drawCard());
    }
    
    public function surrender(): void
    {
        $this->hasLost();
        // return $lost = True;   
    }
    
    public function getScore($cards)
    {
        
        foreach ($cards as $card) {
            $score = $this->score + $this->card->getRawValue();
        };

        // combine values, if>21 return $lost = True, if<=21 return $lost = False (win)
        if ($this->score > 21) {
            return $this->hasLost();
        }
        if ($this->score === 21) {
            echo "You win!";
        }
        else {
            return $score;
        }
    }
    
    public function hasLost()
    {
        echo "You lose :(";
        return $lost = True;   
    }

    public function cards()
    {
        return $this->cards;
    }


}

  
    
?>
