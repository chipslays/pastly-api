# 🗒 PHP Pastly API Client

Simple client implementation for [Pastly](https://pastly.chipslays.ru) API.

# Installation

```bash
composer require chipslays/pastly-api
```

# Usage

```php
use Pastly\Client;

require 'vendor/autoload.php';

$client = new Client;
$token = '1234567890:xxxxx-8OI9fjtk3gXhZRJkzQeDGsJxxxxxxxxx_xxx';

/** get paste */
$client->get('example-slug');
pastly_get('example-slug');

/** create paste */
$client->create($token, 'Hello, world!');
pastly_create($token, 'Hello, world!');

/** edit paste */
$client->edit($token, 'example-slug', ['title' => 'New Title']);
pastly_edit($token, 'example-slug', ['title' => 'New Title']);
```

More can see in [examples](/examples/) folder.

# Examples

Examples can be found [here](/examples/).

# Tests

```bash
composer test
```

## Credits

- [Chipslays](https://github.com/chipslays)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.