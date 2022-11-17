<?php

namespace App\GuessingGame\Game;

class State
{
    private array $secret;
    private array $maskedWord;

    public function __construct()
    {
        $this->secret = $this->createWord();
        $this->maskedWord = array_fill(0, count($this->secret), "_");
    }

    public function getMaskedWord(): array
    {
        return $this->maskedWord;
    }

    private function createWord(): array
    {
        return ["m", "i", "a", "u"];
    }
}
