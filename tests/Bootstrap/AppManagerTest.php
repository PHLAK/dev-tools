<?php

namespace Tests\Bootstrap;

use PHLAK\DevTools\Bootstrap\AppManager;
use Symfony\Component\Console\Application;
use Yoast\PHPUnitPolyfills\TestCases\TestCase;

class AppManagerTest extends TestCase
{
    /** @test */
    public function it_can_create_an_application(): void
    {
        $app = AppManager::create();

        $this->assertInstanceOf(Application::class, $app);
    }
}
