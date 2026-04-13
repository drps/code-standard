<?php

declare(strict_types=1);

use Drps\CodeStandard\FixerConfig;
use PhpCsFixer\Config;
use PhpCsFixer\Finder;
use PhpCsFixer\Runner\Parallel\ParallelConfigFactory;

$config = new Config()
    ->setFinder(
        Finder::create()
            ->in(__DIR__ . '/src')
            ->append([
                __FILE__,
            ]),
    )
    ->setParallelConfig(ParallelConfigFactory::detect())
    ->setCacheFile(__DIR__ . '/var/' . basename(__FILE__) . '.cache');

new FixerConfig()->to($config);

return $config;
