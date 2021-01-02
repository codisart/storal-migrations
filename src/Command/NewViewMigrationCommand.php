<?php

namespace Storal\Command;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class NewViewMigrationCommand extends NewMigrationCommand
{
    protected function configure()
    {
        $this
            ->setName('migrate:view:new')
            ->setDescription('Create a new view migration.')
            ->setHelp('This command allows you to create a new database migration using a view.')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        echo 'create new view migration'."\n";
        return 1;
    }
}