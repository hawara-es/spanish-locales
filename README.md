# Cowork :: Spanish Locales

This library provides information about countries, languages and currencies in Spanish, Galician, Catalan and Euskera.

## JSON Database

Two folders contain the base information in readable JSON format:

- `data` contains the base files with one record per entity: countries, currencies and languages.
- `translations` contains the corresponding translation of each of those entities in Spanish (es), Galician (ga), Catalan (ca) and Euskera (eu).

## Programming Interface

As the library was created in order to be part of the Cowork web application, it offers a programming interface that can easily be consumed from any PHP application.

### Installation

In order to use the data via PHP, first use composer to install the package:

```bash
composer require hawara/spanish-locales
```

### Usage

Then, just use the corresponding iterator.

#### Countries

```php
use Hawara\SpanishLocales\Countries;

foreach((new Countries)->iterate() as $country) {
    print_r([
        'alpha_2' => $country->alpha_2,
        'alpha_3' => $country->alpha_3,
        'numeric_code' => $country->numeric_code,
        'flag' => $country->flag,
    ]);
}
```

#### Currencies

```php
use Hawara\SpanishLocales\Currencies;

foreach((new Currencies)->iterate() as $currency) {
    print_r([
        'letter_code' => $currency->letter_code,
        'numeric_code' => $currency->numeric_code,
    ]);
}
```

#### Languages

```php
use Hawara\SpanishLocales\Languages;

foreach((new Languages)->iterate() as $language) {
    print_r([
        'alpha_2' => $language->alpha_2,
        'alpha_3' => $language->alpha_3,
    ]);
}
```

## Development

### Automated Tests

To run the tests, you need to have the package installed with its corresponding development dependencies. If you have them already installed, just use Pest to run the tests:

```bash
./vendor/bin/pest
```

### Interactive Tests

In order to facilitate the execution of manual or interactive tests, Psysh is also available. Just run:

```bash
./vendor/bin/psysh
```

... and you'll be able to consume the `Hawara\SpanishLocales` namespace:

```php
iterator_to_array(
    (new Hawara\SpanishLocales\Languages)->iterate()
);
```
