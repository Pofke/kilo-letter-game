<?php

namespace App\GuessingGame\Game;

use App\GuessingGame\Player\PlayerInterface;

class LuckyDraw implements GameInterface
{
    private State $state;
    private array $players;

    public function __construct(State $state = null)
    {
        $this->state = $state ?? new State();
    }

    public function addPlayer(PlayerInterface $player): void
    {
        $this->players[] = $player;
    }

    public function makeTurn()
    {
        $letter = $this->player->guessLetter($this->state);
    }

    public function isFinished(): bool
    {
        if (in_array('_', $this->state->getMaskedWord(), true)) {
            return false;
        }
        return true;
    }
}
