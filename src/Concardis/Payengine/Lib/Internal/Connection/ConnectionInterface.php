<?php

namespace Concardis\Payengine\Lib\Internal\Connection;


interface ConnectionInterface
{

    public function post($path, array $payload);
    public function patch($path, array $payload);
    public function delete($path);
    public function get($path, $queryParams);

}