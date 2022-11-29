<?php

namespace App\GuessingGame\Player;

use App\GuessingGame\Game\State;

class SoberPlayer implements PlayerInterface
{
    public function __construct(private array $guessedLetters = [])
    {
    }

    public function __invoke(State $state): string
    {
        $letter = chr(rand(97, 122));
        while (in_array($letter, $this->guessedLetters)) {
            $letter = chr(rand(97, 122));
        }
        return $letter;
    }
}
