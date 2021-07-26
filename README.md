# 🗒 PHP Pastly API Client

![GitHub Workflow Status](https://img.shields.io/github/workflow/status/chipslays/pastly-api/tests)
![GitHub release (latest by date)](https://img.shields.io/github/v/release/chipslays/pastly-api)
![GitHub](https://img.shields.io/github/license/chipslays/pastly-api)

Simple client implementation for [Pastly](https://pastly.chipslays.ru) API.

> **Pastly** - The sexiest pastebin in the Internet.

## Installation

```bash
composer require chipslays/pastly-api
```

## Usage

```php
use Pastly\Client;

require 'vendor/autoload.php';

$client = new Client;
$token = '1622233044:6bCVU-8OI9fjtk3gXhZRJkzQeDGsJNKti2MuBM_n9V';

/** get paste */
$client->get('example-slug');
pastly_get('example-slug');

/** create paste */
$client->create($token, 'Hello, world!');
pastly_create($token, 'Hello, world!');

/** edit paste */
$client->edit($token, 'example-slug', [
    'title' => 'New Title', 
    'syntax' => 'diff',
    'text' => "this text\n-was edited\n+successful",
]);

pastly_edit($token, 'example-slug', [
    'title' => 'New Title', 
    'syntax' => 'diff',
    'text' => "this text\n-was edited\n+successful",
]);
```

More code can see in [examples](/examples/) folder.

## Examples

Examples can be found [here](/examples/).

## Tests

```bash
composer test
```

## Credits

- [Chipslays](https://github.com/chipslays)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
