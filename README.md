# curriculum

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![StyleCI][ico-style]][link-style]
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]


## Structure

If any of the following are applicable to your project, then the directory structure should follow industry best practises by being named the following.

```   
config/
database/
src/
tests/
vendor/
```

## Installation
### Composer

Execute the following command to get the latest version of the package:

```bash
$ composer require scool/curriculum
```

### Laravel

In your `config/app.php` add `CurriculumServiceProvider::class` to the end of the `providers` array:

```php
...
'providers` => [
 ...
 Scool\Curriculum\Providers\CurriculumServiceProvider::class,
],
```

Publish configuration

```bash
$ php artisan vendor:publish --tag=scool_curriculum
```

## Database ##

Use:

```bash
$ php artisan migrate:status
```

To see curriculum migrations and run migrations with:

```bash
$ php artisan migrate
```

Factories for all models are installed in **database/factories**.

To use Curriculum Seeders modify file **database/seeds/DatabaseSeeder**:

```php
public function run()
{
    $this->call(CurriculumSeeder::class);
}
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

## Security

If you discover any security related issues, please email pdavila@iesebre.com instead of using the issue tracker.

## Credits

- [Paolo Dávila][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/scool/curriculum.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-style]: https://styleci.io/repos/83361708/shield?branch=master
[ico-travis]: https://travis-ci.org/pdavila13/curriculum.svg?branch=master
[ico-scrutinizer]: https://scrutinizer-ci.com/g/pdavila13/curriculum/badges/build.png?b=master
[ico-code-quality]: https://scrutinizer-ci.com/g/pdavila13/curriculum/badges/quality-score.png?b=master
[ico-downloads]: https://img.shields.io/packagist/dt/scool/curriculum.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/pdavila13/curriculum
[link-style]: https://styleci.io/repos/83361708
[link-travis]: https://travis-ci.org/pdavila13/curriculum
[link-scrutinizer]: https://scrutinizer-ci.com/g/pdavila13/curriculum/build-status/master
[link-code-quality]: https://scrutinizer-ci.com/g/pdavila13/curriculum/?branch=master
[link-downloads]: https://packagist.org/packages/pdavila13/curriculum

[link-author]: https://github.com/pdavila13
[link-contributors]: ../../contributors
