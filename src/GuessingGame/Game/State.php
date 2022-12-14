<?php

namespace App\GuessingGame\Game;

class State
{
    public function __construct(private array $secret, private array $maskedWord = [])
    {
    }

    public static function fromWord(string $word)
    {
        $secret = str_split($word);
        return new self(
            $secret,
            array_fill(0, count($secret), '_')
        );
    }

    public function addLetter(string $letter)
    {
        $i = 0;
        foreach ($this->secret as $secretLetter) {
            if ($secretLetter === $letter) {
                $this->maskedWord[$i] = $letter;
            }
            $i++;
        }
    }

    public function getMaskedWord(): array
    {
        return $this->maskedWord;
    }

    public function isFinished(): bool
    {
        if (in_array('_', $this->getMaskedWord(), true)) {
            return false;
        }
        return true;
    }
}
