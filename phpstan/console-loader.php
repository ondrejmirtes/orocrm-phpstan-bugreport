<?php

declare(strict_types=1);

use Symfony\Bundle\FrameworkBundle\Console\Application;

require dirname(__DIR__).'/src/registerOroClassAlias.php';
$kernel = new AppKernel('dev', false);

return new Application($kernel);
