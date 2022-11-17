<?php

namespace App\GuessingGame\Game;

use App\GuessingGame\Player\PlayerInterface;

class LuckyDraw implements GameInterface
{
    private State $state;
    private array $players = [];
    private ?string $winner = null;

    public function __construct(State $state = null)
    {
        $words = ['telephone', 'desk', 'sleep', 'beast'];
        shuffle($words);
        $secret = $words[0];
        $this->state = $state ?? State::fromWord($secret);
    }

    public function addPlayer(PlayerInterface|callable $player, string $name): void
    {
        $this->players[$name] = $player;
    }

    public function makeTurn()
    {
        /** @var PlayerInterface|callable $player */
        foreach ($this->players as $nickname => $player) {
            $this->state->addLetter($player($this->state));
            if ($this->state->isFinished() && $this->winner == null) {
                $this->winner = $nickname;
            }
        }
        return $this->state;
    }

    public function getWinner(): ?string
    {
        return $this->winner;
    }

    public function getState(): State
    {
        return $this->state;
    }
}
