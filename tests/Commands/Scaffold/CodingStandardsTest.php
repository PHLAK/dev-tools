<?php

namespace Tests\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Tester\CommandTester;
use Tests\TestCase;

class CodingStandardsTest extends TestCase
{
    private const CONFIG_FILE_PATH = self::TEST_DATA_PATH . '/.php-cs-fixer.dist.php';
    private const STUB_FILE_PATH = self::STUBS_PATH . '/php-cs-fixer/.php-cs-fixer.dist.php';

    private CommandTester $command;

    protected function setUp(): void
    {
        parent::setUp();

        $this->command = new CommandTester($this->application->find('scaffold:coding-standards'));
    }

    protected function tearDown(): void
    {
        if (file_exists(self::CONFIG_FILE_PATH)) {
            unlink(self::CONFIG_FILE_PATH);
        }

        parent::tearDown();
    }

    /** @test */
    public function it_can_create_a_coding_standards_config_in_the_current_directory(): void
    {
        $this->command->execute([]);

        $this->assertMatchesRegularExpression('/Initialized coding standards configuration+/', $this->command->getDisplay());
        $this->assertEquals(Command::SUCCESS, $this->command->getStatusCode());

        $this->assertFileExists(self::CONFIG_FILE_PATH);
        $this->assertFileEquals(self::STUB_FILE_PATH, self::CONFIG_FILE_PATH);
    }
}
