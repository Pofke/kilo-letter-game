<?php

namespace App\Command;

use App\GuessingGame\Game\LuckyDraw;
use App\GuessingGame\Service\PlayerRegistry;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class AutoplayCommand extends Command
{
    protected function configure()
    {
        $this->setName('game:autoplay');
        $this->addArgument('players', InputArgument::IS_ARRAY);
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $registry = new PlayerRegistry();
        $game = new LuckyDraw();
        $players = $input->getArgument('players');
        foreach ($players as $player) {
            $game->addPlayer($registry->get($player), $player);
        }
        $game->autoplay();

        $output->writeln(sprintf('Winner is %s', $game->getWinner()));
        return 0;
    }
}
