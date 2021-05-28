<?php

use Pastly\Client;

require __DIR__ . '/../vendor/autoload.php';

$client = new Client;

$token = '1622233044:6bCVU-8OI9fjtk3gXhZRJkzQeDGsJNKti2MuBM_n9V';

$paste = $client->create($token, 'paste with extra parameters', [
    'title' => 'Example Title',
    'syntax' => 'text',
    'slug' => null,
    'type' => 'public',
    'password' => null,
]);

print_r('Title: ' . $paste->getTitle() . PHP_EOL);
print_r('Views: ' . $paste->getViews() . PHP_EOL);
print_r('Syntax: ' . $paste->getSyntax() . PHP_EOL);
print_r('Type: ' . $paste->getType() . PHP_EOL);
print_r('Slug: ' . $paste->getSlug() . PHP_EOL);
print_r('Source Link: ' . $paste->getLinks()->getSource() . PHP_EOL);
print_r('Raw Link: ' . $paste->getLinks()->getRaw() . PHP_EOL);
print_r('Markdown Link: ' . $paste->getLinks()->getMarkdown() . PHP_EOL);
print_r('Download Link: ' . $paste->getLinks()->getDownload() . PHP_EOL);
print_r('Clone Link: ' . $paste->getLinks()->getClone() . PHP_EOL);