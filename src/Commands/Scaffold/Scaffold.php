<?php

namespace PHLAK\DevTools\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class Scaffold extends Command
{
    protected static $defaultName = 'scaffold:coding-standards';

    protected static $defaultDescription = 'Scaffold coding standards configuration files';

    protected function configure(): void
    {
        // ...
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        // ...

        return self::SUCCESS;
    }
}
