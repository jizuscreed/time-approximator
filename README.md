# Time approximator
A small library to generate short approximate human friendly time description. Inspired by https://github.com/martinandert/damals

## Installation
```
composer require jizuscreed/time-approximator
```

## Instantiation

```php
$timeApproximator = new jizuscreed\TimeApproximator\TimeApproximator(new \jizuscreed\TimeApproximator\Languages\Russian());
```

## It can

```php
$this->timeApproximator->getDescriptionFor(20); // полминуты
$this->timeApproximator->getDescriptionFor(40); // меньше чем 1 минута
$this->timeApproximator->getDescriptionFor(16*60); // 16 минут
$this->timeApproximator->getDescriptionFor(11*60); // 11 минут
$this->timeApproximator->getDescriptionFor(46*60); // примерно 1 час
$this->timeApproximator->getDescriptionFor(43*60); // 43 минуты
$this->timeApproximator->getDescriptionFor(68*60); // примерно 1 час
$this->timeApproximator->getDescriptionFor(24*60*60*15+23*60*60+15*600; // 16 дней)

```

## Create language pack

Just create class in `jizuscreed\TimeApproximator\Languages` inheriting `jizuscreed\TimeApproximator\Languages\AbstractLanguagePack` and implement abstract methods

## Contributing
Please, send your pull requests, especially with language packs