<?php

namespace Storal\Command;

use \Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class RollbackCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('rollback')
            ->setDescription('Rollback last migrations.')
            ->setHelp('This command allows you to rollback last database migrations.')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        echo 'rollback migrations'."\n";
        return 1;
    }
}