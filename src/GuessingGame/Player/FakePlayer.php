<?php

namespace App\GuessingGame\Player;

use App\GuessingGame\Game\State;

class FakePlayer implements PlayerInterface
{

    public function guessLetter(State $state): string
    {
        return 'h';
    }
}