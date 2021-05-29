<?php

use Pastly\Client;

require __DIR__ . '/../vendor/autoload.php';

$client = new Client;

$token = '1622233044:6bCVU-8OI9fjtk3gXhZRJkzQeDGsJNKti2MuBM_n9V';

try {
    $client->edit($token, 'qGaX7Lz', [
        'title' => 'New Title',
        'syntax' => 'diff',
        'text' => "this text\n-was edited\n+successful",
    ]);
} catch (Throwable $th) {
    var_dump($th->getCode(), $th->getMessage());
}