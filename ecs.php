<?php

declare(strict_types=1);

use Symplify\EasyCodingStandard\Config\ECSConfig;

return ECSConfig::configure()
    ->withPaths([
        __DIR__ . '/public',
    ])
    ->withSkip([
        __DIR__ . '/public/wp/*',
        __DIR__ . '/public/content/plugins/wordpress-seo',
    ])
    ->withRootFiles()
    ->withPreparedSets(psr12: true, common: true, strict: true, cleanCode: true);
