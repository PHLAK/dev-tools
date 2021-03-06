<?php

namespace Tests;

use PHLAK\DevTools\Bootstrap\AppManager;
use Symfony\Component\Console\Application;
use Yoast\PHPUnitPolyfills\TestCases\TestCase as TestCasesTestCase;

class TestCase extends TestCasesTestCase
{
    protected const STUBS_PATH = __DIR__ . '/../stubs';
    protected const TEST_DATA_PATH = __DIR__ . '/_data';

    protected Application $application;

    protected function setUp(): void
    {
        parent::setUp();

        chdir(self::TEST_DATA_PATH);

        $this->application = AppManager::create();
    }
}
