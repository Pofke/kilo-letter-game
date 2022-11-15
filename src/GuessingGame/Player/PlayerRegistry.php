<?php

namespace App\GuessingGame\Player;

class PlayerRegistry
{
    public function __construct(private array $players)
    {
    }

    public function get($playerId): ?PlayerInterface
    {
        foreach ($this->players as $player) {
            if ($player->getPlayerId === $playerId) {
                return $player;
            }
        }
        return null;
    }
    public function getAll(): array
    {
        return $this->players;
    }
}
