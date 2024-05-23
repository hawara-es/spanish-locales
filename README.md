# Cowork :: Spanish Locales

This library provides information about countries, languages and currencies in Catalan, Spanish, Euskera and Galician.

## JSON Database

Two folders contain the base information in readable JSON format:

- **data/** contains the base files with one record per entity:
  - **countries**.json
  - **currencies**.json
  - **languages**.json
- **translations/** contains the corresponding translations:
  - **ca/** for Catalan
  - **es/** for Spanish
  - **eu/** for Euskera
  - **ga/** for Galician

## Programming Interface

As the library was created in order to be part of the **Cowork** web application, it offers a programming interface that can easily be consumed from any PHP application.

### Installation

In order to use the data via PHP, first use composer to install the package:

```bash
composer require hawara/spanish-locales
```

### Usage

Then, just use the corresponding class to access the information you want.

##### Use

All the classes in the library are in the `Hawara\SpanishLocales` namespace.

```php
use Hawara\SpanishLocales\Countries;
use Hawara\SpanishLocales\Currencies;
use Hawara\SpanishLocales\Languages;
```

##### Instantiate

You can either instantiate those classes without any argument:

```php
$countries = new Countries;
$currencies = new Currencies;
$languages = new Languages;
```

Or by passing it the path to an alternative **JSON** file:

```php
$countries = new Countries(__DIR__.'/data/countries.json');
$currencies = new Currencies(__DIR__.'/data/currencies.json');
$languages = new Languages(__DIR__.'/data/languages.json');
```

#### Countries

##### Iterate

The `iterate` method offers you access to these properties for each country:

| Property     | Example |
| ------------ | ------- |
| alpha_2      | ES      |
| alpha_3      | ESP     |
| numeric_code | 724     |
| flag         | 🇪🇸      |

```php
foreach($countries->iterate() as $country) {
    print_r([
        'alpha_2' => $country->alpha_2,
        'alpha_3' => $country->alpha_3,
        'numeric_code' => $country->numeric_code,
        'flag' => $country->flag,
    ]);
}
```

##### Locate `countries.json`

The `path` method returns the path to the base JSON file that contains the countries.

```php
$countries->path();

//your/path/to/data/countries.json
```

#### Currencies

##### Iterate

The `iterate` method offers you access to these properties for each currency:

| Property     | Example |
| ------------ | ------- |
| letter_code  | EUR     |
| numeric_code | 978     |

```php
foreach($currencies->iterate() as $currency) {
    print_r([
        'letter_code' => $currency->letter_code,
        'numeric_code' => $currency->numeric_code,
    ]);
}
```

##### Locate `currencies.json`

The `path` method returns the path to the base JSON file that contains the currencies.

```php
$currencies->path();

//your/path/to/data/currencies.json
```

#### Languages

##### Iterate

The `iterate` method offers you access to these properties for each language:

| Property | Example |
| -------- | ------- |
| alpha_2  | es      |
| alpha_3  | spa     |

```php
foreach($languages->iterate() as $language) {
    print_r([
        'alpha_2' => $language->alpha_2,
        'alpha_3' => $language->alpha_3,
    ]);
}
```

##### Locate `languages.json`

The `path` method returns the path to the base JSON file that contains the languages.

```php
$languages->path();

//your/path/to/data/languages.json
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
