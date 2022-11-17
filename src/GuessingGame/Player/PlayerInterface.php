<?php

namespace App\GuessingGame\Player;

use App\GuessingGame\Game\State;

interface PlayerInterface
{
    public function guessLetter(State $state): string;
}
