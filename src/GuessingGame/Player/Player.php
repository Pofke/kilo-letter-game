<?php

namespace App\GuessingGame\Player;

use App\GuessingGame\State;

class Player implements PlayerInterface
{
    public function __construct(private int $playerId)
    {
    }

    public function getPlayerId(): int
    {
        return $this->playerId;
    }


    public function guessLetter(State $state): string
    {
        return chr(rand(97, 122));
    }
}
