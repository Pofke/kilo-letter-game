<?php

namespace App\GuessingGame\Service;

use App\GuessingGame\Player\PlayerInterface;

class PlayerRegistry
{
    public function __construct(private array $players)
    {
        $this->players = [];
    }

    public function get($playerId): PlayerInterface
    {
        return $this->players[$playerId];
    }
    public function getAll(): array
    {
        return $this->players;
    }
}
