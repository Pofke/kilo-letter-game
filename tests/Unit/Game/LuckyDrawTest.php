<?php

namespace App\Tests\Unit;

use App\GuessingGame\Game\LuckyDraw;
use App\GuessingGame\Player\DrunkPlayer;
use PHPUnit\Framework\TestCase;

class LuckyDrawTest extends TestCase
{
    public function testCreateGameCorrect()
    {
        $luckyDraw = new LuckyDraw();
        $luckyDraw->makeTurn();
        $this->assertFalse($luckyDraw->getState()->isFinished());
    }
}
