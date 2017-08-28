# laradeck-helpers

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

Набор полезных хелперов.

## Install

Via Composer

``` bash
$ composer require ngtfkx/laradeck-helpers
```

## Documentation

``` php
// Проверяем является ли запрос аяксовым
is_ajax(\Illuminate\Http\Request $request): bool
```

``` php
// Проверяем является ли переданная строка json-строкой
is_json(string $string): bool
```

``` php
// Проверка является ли число четным
is_even(int $value): bool
```

``` php
// Проверка является ли число нечетным
is_odd(int $value): bool
```

``` php
// Если условие истинное вернуть значение параметра $first, иначе параметра $second
return_if(bool $expression, string $first, string $second = ''): string
```

``` php
// Если условие ложное вернуть значение параметра $first, иначе параметра $second
return_unless(bool $expression, string $first, string $second = ''): string
```

``` php
// Проверяем является ли переданная строка не отрицательным целым числом
str_is_positive_int(string $string): bool
```

``` php
// Перечисление элементов через запятую
comma(...$items): string
```

``` php
// Установовить видимость блока через inline-стиль
css_visibility_by_display(bool $display, string $state = 'block'): string
```

``` php
// Установовить видимость блока через класс
css_visibility_by_class(bool $display, string $classForHide = 'hide', string $classForShow = ''): string
```

``` php
// Форматировать сумму в рублях
format_rub($val, $sign = '&#8381;'): string
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Credits

- [Denis Sandal][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/ngtfkx/laradeck-helpers.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/ngtfkx/laradeck-helpers/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/ngtfkx/laradeck-helpers.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/ngtfkx/laradeck-helpers.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/ngtfkx/laradeck-helpers.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/ngtfkx/laradeck-helpers
[link-travis]: https://travis-ci.org/ngtfkx/laradeck-helpers
[link-scrutinizer]: https://scrutinizer-ci.com/g/ngtfkx/laradeck-helpers/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/ngtfkx/laradeck-helpers
[link-downloads]: https://packagist.org/packages/ngtfkx/laradeck-helpers
[link-author]: https://github.com/ngtfkx
[link-contributors]: ../../contributors
