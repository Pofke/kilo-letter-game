<?php

namespace App\GuessingGame\Game;

use App\GuessingGame\Player\PlayerInterface;

class LuckyDraw implements GameInterface
{
    private State $state;
    private array $players = [];

    public function __construct(State $state = null)
    {
        $words = ['telephone', 'desk', 'sleep', 'beast'];
        shuffle($words);
        $secret = $words[0];
        $this->state = State::fromWord($secret) ?? $state;
    }

    public function addPlayer(PlayerInterface $player): void
    {
        $this->players[] = $player;
    }

    public function makeTurn()
    {
        foreach ($this->players as $player) {

        }
    }

    public function getState(): State
    {
        return $this->state;
    }


}
