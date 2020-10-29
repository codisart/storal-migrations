<?php


namespace Storal\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class DumpCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('schema:dump')
            ->setDescription('Dump the current schema.')
            ->setHelp('This command allows you to dump the current schema.')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        echo 'dump schema'."\n";
        return 1;
    }
}
