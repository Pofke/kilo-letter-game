<?php

namespace App\Controller;

use App\GuessingGame\Game\LuckyDraw;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GameController extends AbstractController
{
    public function __construct()
    {
    }

    #[Route('/make_turn', name: 'app_make_turn')]
    public function makeTurn(Request $request)
    {
/*
        $this->game->addPlayer(function () use ($request) {
            return $request->get('letter');
        }, 'Player');

        $this->game->makeTurn();
*/
        return new Response('works');
    }
}
