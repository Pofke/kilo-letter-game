<?php

namespace App\Tests\Unit;

use App\GuessingGame\Game\LuckyDraw;
use App\GuessingGame\Game\State;
use PHPUnit\Framework\TestCase;

class LuckyDrawTest extends TestCase
{
    public function testCreateGameCorrect()
    {
        $luckyDraw = new LuckyDraw();
        $luckyDraw->makeTurn();
        $this->assertFalse($luckyDraw->getState()->isFinished());
    }

    public function testLetterTestSuccessfull()
    {
        $luckyDraw = new LuckyDraw(State::fromWord('hi'));
        $luckyDraw->addPlayer(new FakePlayer());
        $state = $luckyDraw->makeTurn();
        $this->assertSame(['h', '_'], $state->getMaskedWord());

    }
}
