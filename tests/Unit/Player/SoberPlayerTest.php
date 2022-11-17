<?php

namespace App\Tests\Unit\Player;

use App\GuessingGame\Game\State;
use App\GuessingGame\Player\SoberPlayer;
use PHPUnit\Framework\TestCase;

class SoberPlayerTest extends TestCase
{
    public function testIsDrunkPlayerGuessCorrect()
    {
        $state = $this->createMock(State::class);
        $player = new SoberPlayer();
        $letter = $player->__invoke($state);

        $this->assertIsString($letter);
        $this->assertEquals(1, strlen($letter));

        $letter2 = $player->__invoke($state);

        $this->assertNotEquals($letter, $letter2);

    }
}
