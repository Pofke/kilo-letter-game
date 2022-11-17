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

    public function testLetterGuessSuccessfully()
    {
        $luckyDraw = new LuckyDraw(State::fromWord('hi'));
        $luckyDraw->addPlayer(new FakePlayer(), 'fake');
        $state = $luckyDraw->makeTurn();
        $this->assertSame(['h', '_'], $state->getMaskedWord());

    }


    public function testGameIsFinishedCorrectly()
    {
        $luckyDraw = new LuckyDraw(State::fromWord('h'));
        $luckyDraw->addPlayer(new FakePlayer(), 'fake');
        $state = $luckyDraw->makeTurn();
        $this->assertSame(['h'], $state->getMaskedWord());
        $this->assertTrue($state->isFinished());
    }

    public function testTwoRounds()
    {
        $luckyDraw = new LuckyDraw(State::fromWord('hi'));
        $luckyDraw->addPlayer(function() {
            return 'h';
        }, 'first');

        $luckyDraw->addPlayer(function() {
            return 'i';
        }, 'second');

        $state = $luckyDraw->makeTurn();
        $this->assertTrue($state->isFinished());
    }

    public function testGameEndsAfterSecondRound()
    {
        $luckyDraw = new LuckyDraw(State::fromWord('hi'));
        $luckyDraw->addPlayer(function() {
            return 'h';
        }, 'first');

        $luckyDraw->addPlayer(function() {
            return 'i';
        }, 'second');


        $luckyDraw->addPlayer(function() {
            return 'i';
        }, 'third');

        $luckyDraw->makeTurn();
        $this->assertSame('second', $luckyDraw->getWinner());
    }
}
