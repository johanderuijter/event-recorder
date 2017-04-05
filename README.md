# event-recorder

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Total Downloads][ico-downloads]][link-downloads]



## Install

Via Composer

``` bash
$ composer require jdr/event-recorder
```

## Usage

To start recording domain events, implement the `ContainsRecordedEvents` interface. Optionally, you can use the `EventRecorderCapabilities` trait.

``` php
<?php
namespace JDR\App\Entity;

use JDR\EventRecorder\ContainsRecordedEvents;
use JDR\EventRecorder\EventRecorderCapabilities;

class Entity implements ContainsRecordedEvents
{
    use EventRecorderCapabilities;

    public function doSomething()
    {
        // ...

        $this->record(new SomethingHappened());
    }
}

$entity = new Entity();
$entity->doSomething();

// ...

$events = $entity->releaseEvents();
```

This package also contains a public event recorder.

``` php
<?php
namespace JDR\App;

use JDR\EventRecorder\EventRecorder;

$recorder = new EventRecorder();
$recorder->record(new SomethingHappened());

// ...

$events = $recorder->releaseEvents();
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Testing

``` bash
$ bin/phpspec run
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

## Security

If you discover any security related issues, please email dev@johanderuijter.nl instead of using the issue tracker.

## Credits

- [Johan de Ruijter][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/jdr/event-recorder.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/jdr/event-recorder.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/jdr/event-recorder
[link-downloads]: https://packagist.org/packages/jdr/event-recorder
[link-author]: https://github.com/johanderuijter
[link-contributors]: ../../contributors
