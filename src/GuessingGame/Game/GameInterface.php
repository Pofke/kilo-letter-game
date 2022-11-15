<?php

namespace App\GuessingGame\Game;

use App\GuessingGame\Player\PlayerInterface;

interface GameInterface
{
    public function addPlayer(PlayerInterface $player);
    public function makeTurn();
}
