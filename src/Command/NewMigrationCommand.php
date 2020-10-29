<?php

namespace Storal\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class NewMigrationCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('migrate:new')
            ->setDescription('Create a new migration.')
            ->setHelp('This command allows you to create a new database migration.')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        echo 'create new migration'."\n";
        return 1;
    }
}
