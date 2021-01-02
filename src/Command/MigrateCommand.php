<?php

namespace Storal\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class MigrateCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('migrate')
            ->setDescription('Apply new migrations.')
            ->setHelp('This command allows you to apply all new database migrations.')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        echo 'apply migrations'."\n";
        return 1;
    }
}