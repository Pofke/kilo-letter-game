<?php

namespace App\GuessingGame\Player;

use App\GuessingGame\Game\State;

class DrunkPlayer implements PlayerInterface
{
    public function __construct()
    {
    }


    public function __invoke(State $state): string
    {
        return chr(rand(97, 122));
    }
}
