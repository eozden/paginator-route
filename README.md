# Paginator Routes for Laravel

if your routes contains {page} route parameter, this middleware add this {page} parameter to your request instance. 

## Contents

- [Installation](#installation)
- [Usage](#usage)
    - [Examples](#examples)
- [Changelog](#changelog)
- [Testing](#testing)
- [Security](#security)
- [Contributing](#contributing)
- [Credits](#credits)
- [License](#license)


## Installation
Via Composer
```bash
$ composer require eozden/paginator-route
```
Or you can manually update your require block and run `composer update` if you choose so:
```json
{
    "require": {
        "eozden/paginator-route": "^1.0"
    }
}
```

## Usage



### Examples

```php
public function list()
{
    User::paginate(30);
}
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Testing

``` bash
$ composer test
```

## Security

If you discover any security related issues, please email enes@emarka.com.tr instead of using the issue tracker.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Credits

- [Enes Özden](https://twitter.com/ensozden)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
