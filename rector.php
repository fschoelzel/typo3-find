<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Ssch\TYPO3Rector\Set\Typo3LevelSetList;

return RectorConfig::configure()
    ->withPhpSets()
    ->withPreparedSets(codeQuality: true, codingStyle: true)
    ->withPaths(
        [
            __DIR__.'/Classes',
            __DIR__.'/Tests',
            __DIR__.'/Configuration',
            __DIR__.'/*.php',
        ]
    )
    ->withSkip([__DIR__.'/.Build/vendor',
            __DIR__.'/var',
            __DIR__.'/.Build',
            __DIR__.'/*.cache', ])
    ->withSets([
            Typo3LevelSetList::UP_TO_TYPO3_12,
        ]);
