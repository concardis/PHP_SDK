<?php

include_once __DIR__ . '/vendor/autoload.php';

$classLoader = new \Composer\Autoload\ClassLoader();
$classLoader->addPsr4("Concardis\\Payengine\\Lib\\", __DIR__."/src/Concardis/Payengine/Lib", true);
$classLoader->addPsr4("Concardis\\Payengine\\Lib\\Test\\", __DIR__."/tests/Concardis/Payengine/Lib/Test", true);
$classLoader->register();