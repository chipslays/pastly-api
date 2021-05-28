<?php

use Pastly\Client;

require __DIR__ . '/../vendor/autoload.php';

$client = new Client;

$list = $client->getSyntaxes();

print_r($list->toArray());