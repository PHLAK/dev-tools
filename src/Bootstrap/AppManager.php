<?php

namespace PHLAK\DevTools\Bootstrap;

use PHLAK\DevTools\Commands\Scaffold\CodingStandards;
use PHLAK\DevTools\Commands\Scaffold\StaticAnalysis;
use Symfony\Component\Console\Application;

class AppManager
{
    public static function create(): Application
    {
        $application = new Application;

        $application->addCommands([
            new CodingStandards,
            new StaticAnalysis,
        ]);

        return $application;
    }
}
