<?php

namespace App\GuessingGame\Game;

use App\GuessingGame\Player\PlayerInterface;
use App\GuessingGame\State;

class Game implements GameInterface
{
    private State $state;
    private PlayerInterface $player;

    public function createState(): void
    {
        $this->state = new State();
    }

    public function addPlayer(PlayerInterface $player): void
    {
        $this->player = $player;
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
