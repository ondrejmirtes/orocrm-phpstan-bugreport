<?php

require dirname(__DIR__).'/src/registerOroClassAlias.php';
$kernel = new AppKernel('dev', false);
$kernel->boot();

return $kernel->getContainer()->get('doctrine')->getManager();
