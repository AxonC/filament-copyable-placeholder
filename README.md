# This is my package filament-copyable-placeholder

[![Latest Version on Packagist](https://img.shields.io/packagist/v/axonc/filament-copyable-placeholder.svg?style=flat-square)](https://packagist.org/packages/axonc/filament-copyable-placeholder)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/axonc/filament-copyable-placeholder/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/axonc/filament-copyable-placeholder/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/axonc/filament-copyable-placeholder/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/axonc/filament-copyable-placeholder/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/axonc/filament-copyable-placeholder.svg?style=flat-square)](https://packagist.org/packages/axonc/filament-copyable-placeholder)

This package provides a form field for the [Laravel Filament](https://filamentphp.com/) Admin panel framework which adds a copy button
to the [Placeholder](https://filamentphp.com/docs/2.x/forms/layout#placeholder)

### Examples

### Copy Button
![](images/button_example.png)
#### Icon Only
![](images/basic_example.png)

## Installation

You can install the package via composer:

```bash
composer require axonc/filament-copyable-placeholder
```

## Usage

All functionality mirrors the documentation found [here](https://filamentphp.com/docs/2.x/forms/layout#placeholder) for the `Placeholder` component. Additional functionality specific
to this package can be found below.

The copy behavior will take the value of the contents passed to the component and write to the clipboard
via JavaScript. NOTE: This must support the `window.navigator` API.

### Basic Usage

```php
use AxonC\FilamentCopyablePlaceholder\Forms\Components\CopyablePlaceholder;

CopyablePlaceholder::make('response')
    ->content("Placeholder Content")
```

### Custom Icon Text

```php
use AxonC\FilamentCopyablePlaceholder\Forms\Components\CopyablePlaceholder;

CopyablePlaceholder::make('response')
    ->content("Placeholder Content")
    ->buttonText("Kopieren")
```

### Icon Only Mode

```php
use AxonC\FilamentCopyablePlaceholder\Forms\Components\CopyablePlaceholder;

CopyablePlaceholder::make('response')
    ->content("Placeholder Content")
    ->iconOnly()
```

#### Customize Icon

Icon Text

```php
use AxonC\FilamentCopyablePlaceholder\Forms\Components\CopyablePlaceholder;

CopyablePlaceholder::make('response')
    ->content("Placeholder Content")
    ->iconOnly()
    ->icon("heroicons-o-{ICON-NAME}")
```

Icon Color

```php
use AxonC\FilamentCopyablePlaceholder\Forms\Components\CopyablePlaceholder;

CopyablePlaceholder::make('response')
    ->content("Placeholder Content")
    ->iconOnly()
    ->icon("heroicons-o-{ICON-NAME}")
    ->iconColor("secondary")
```

### Overwriting Styles

By default, some sensible Tailwind classes are applied to the content of the placeholder and the button.
This results in some alignment being applied when in the button (it will establish a flex container with the button) or in icon-only mode will ensure it exists at the vertical end of the content.

This behavior can be overridden by calling `extraAttributes` on the component.

```php
use AxonC\FilamentCopyablePlaceholder\Forms\Components\CopyablePlaceholder;

CopyablePlaceholder::make('response')
    ->content("Placeholder Content")
    ->extraAttributes([
        'class' => 'flex border-md-1'
    ])
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Callum Axon](https://github.com/AxonC)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
