<?php

namespace PHLAK\DevTools\Bootstrap;

use PHLAK\DevTools\Commands\Scaffold\CodingStandards;
use Symfony\Component\Console\Application;

class AppManager
{
    public static function create(): Application
    {
        $application = new Application;

        $application->add(new CodingStandards);

        return $application;
    }
}
