<?php

use Hawara\SpanishLocales\Currencies;

test('iterates through the currencies', function () {
    $currencies = (new Currencies)->iterate();
    $currency = $currencies->current();

    expect($currency)->toHaveProperty('letter_code');
    expect($currency)->toHaveProperty('numeric_code');
});

test('returns the path to the currencies file', function () {
    $currenciesPath = (new Currencies)->path();

    expect(file_exists($currenciesPath))->toBeTrue();
});
