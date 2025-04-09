<?php

use Rector\Config\RectorConfig;

return RectorConfig::configure()
    ->withPaths([
        './src',
        './tests',
    ])
    ->withImportNames()
    ->withPreparedSets(
        deadCode: true,
        codeQuality: true,
    );
