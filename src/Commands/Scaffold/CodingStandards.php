<?php

namespace PHLAK\DevTools\Commands\Scaffold;

use PHLAK\CodingStandards\Commands\Initialize;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class CodingStandards extends Command
{
    protected static $defaultName = 'scaffold:coding-standards';

    protected static $defaultDescription = 'Scaffold development configuration files';

    protected function configure(): void
    {
        $this->addArgument('path', InputArgument::OPTIONAL, 'The path to initialize', getcwd());
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        (new Initialize)->run(new ArrayInput([
            'path' => $input->getArgument('path'),
        ]), $output);

        $output->writeln('Initialized coding standards configuration');

        return self::SUCCESS;
    }
}
