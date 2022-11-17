<?php

namespace App\Tests\Unit;

use App\GuessingGame\Game\State;
use App\GuessingGame\Player\PlayerInterface;

class FakePlayer implements PlayerInterface
{

    public function guessLetter(State $state): string
    {
        return 'h';
    }
}