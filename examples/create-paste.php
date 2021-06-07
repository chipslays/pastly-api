<?php

use Pastly\Client;
use Pastly\Expiration;

require __DIR__ . '/../vendor/autoload.php';

$client = new Client;

$token = '1622325956:xmNbS_jC1cwKyyywWHhgELvqnpRqtWsTsHmFOq-8YT';

try {
    $paste = $client->create($token, 'paste with extra parameters', [
        'title' => 'Example Title',
        'syntax' => 'text',
        'slug' => null,
        'type' => 'public',
        'password' => null,
        'expiration' => Expiration::until('+5 min'),
        // 'expiration' => Expiration::until('+6 hour'),
        // 'expiration' => Expiration::until('+1 day'),
        // 'expiration' => Expiration::until('+2 week'),
        // 'expiration' => Expiration::until('+6 month'),
        // 'expiration' => Expiration::until('+1 year'),
        // 'expiration' => Expiration::NEVER,
        // 'expiration' => Expiration::BURN_AFTER_READ,
    ]);

    print_r('Title: ' . $paste->getTitle() . PHP_EOL);
    print_r('Views: ' . $paste->getViews() . PHP_EOL);
    print_r('Syntax: ' . $paste->getSyntax() . PHP_EOL);
    print_r('Type: ' . $paste->getType() . PHP_EOL);
    print_r('Slug: ' . $paste->getSlug() . PHP_EOL);
    print_r('Expiration: ' . $paste->getExpiration() . PHP_EOL);
    print_r('Source Link: ' . $paste->getLinks()->getSource() . PHP_EOL);
    print_r('Raw Link: ' . $paste->getLinks()->getRaw() . PHP_EOL);
    print_r('Markdown Link: ' . $paste->getLinks()->getMarkdown() . PHP_EOL);
    print_r('Download Link: ' . $paste->getLinks()->getDownload() . PHP_EOL);
    print_r('Clone Link: ' . $paste->getLinks()->getClone() . PHP_EOL);
} catch (Throwable $th) {
    var_dump($th->getCode(), $th->getMessage());
}

