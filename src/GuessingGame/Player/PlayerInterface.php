<?php

namespace App\GuessingGame\Player;

use App\GuessingGame\Game\State;

interface PlayerInterface
{
    public function __invoke(State $state): string;
}
