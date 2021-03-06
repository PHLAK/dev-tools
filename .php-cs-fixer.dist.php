<?php

require __DIR__ . '/vendor/autoload.php';

$finder = PhpCsFixer\Finder::create()->in([
    __DIR__ . '/bin',
    __DIR__ . '/src',
    __DIR__ . '/tests',
]);

return PHLAK\CodingStandards\ConfigFactory::make($finder);
