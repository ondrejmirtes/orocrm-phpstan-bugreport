<?php

use Oro\Bundle\EntityExtendBundle\Tools\ExtendClassLoadingUtils;

require_once __DIR__.'/../vendor/autoload.php';

$cacheDir = __DIR__.'/../var/cache/dev';

ExtendClassLoadingUtils::registerClassLoader($cacheDir);
ExtendClassLoadingUtils::setAliases($cacheDir);
