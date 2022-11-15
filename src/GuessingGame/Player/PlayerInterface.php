<?php

namespace App\GuessingGame\Player;

use App\GuessingGame\State;

interface PlayerInterface
{
    public function guessLetter(State $state): string;
}
