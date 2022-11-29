<?php

namespace App\GuessingGame\Service;

use App\GuessingGame\Player\DrunkPlayer;
use App\GuessingGame\Player\PlayerInterface;
use App\GuessingGame\Player\SoberPlayer;

class PlayerRegistry
{
    public function __construct(private array $players = [])
    {
        $this->players = [
            'drunk' => new DrunkPlayer(),
            'sober' => new SoberPlayer()
        ];
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
