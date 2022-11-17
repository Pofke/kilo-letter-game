<?php

namespace App\Tests\Unit;

use App\GuessingGame\Game\State;
use App\GuessingGame\Player\PlayerInterface;

class FakePlayer implements PlayerInterface
{

    public function __invoke(State $state): string
    {
        return 'h';
    }
}