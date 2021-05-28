<?php

require __DIR__ . '/../vendor/autoload.php';

$token = '1622233044:6bCVU-8OI9fjtk3gXhZRJkzQeDGsJNKti2MuBM_n9V';

pastly_create($token, 'Hello, world!');
pastly_edit($token, 'qGaX7Lz', ['title' => 'New Title']);
pastly_get('example');