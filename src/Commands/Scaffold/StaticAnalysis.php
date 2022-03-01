<?php

namespace PHLAK\DevTools\Commands\Scaffold;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Question\ConfirmationQuestion;

class StaticAnalysis extends Command
{
    public const CONFIG_FILE_STUB = __DIR__ . '/../../../stubs/phpstan/phpstan.neon.dist';
    public const CONFIG_FILE_NAME = 'phpstan.neon.dist';

    protected static $defaultName = 'scaffold:static-analysis';

    protected static $defaultDescription = 'Scaffold static analysis configuration files';

    protected function configure(): void
    {
        $this->addArgument('path', InputArgument::OPTIONAL, 'The path to initialize', getcwd());
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        if (file_exists(self::CONFIG_FILE_NAME)) {
            /** @var QuestionHelper $helper */
            $helper = $this->getHelper('question');

            if (! $helper->ask($input, $output, new ConfirmationQuestion('<question>Configuration file already exists. Overwrite?</question> (y|N) ', false))) {
                $output->writeln('<fg=yellow>Aborted!</>');

                return Command::SUCCESS;
            }
        }

        if (! copy(self::CONFIG_FILE_STUB, (string) $input->getArgument('path') . '/' . self::CONFIG_FILE_NAME)) {
            $output->writeln('<error>Failed to initialze coding standards configuration</error>');

            return self::FAILURE;
        }

        $output->writeln('Initialized static analysis configuration');

        return self::SUCCESS;
    }
}
