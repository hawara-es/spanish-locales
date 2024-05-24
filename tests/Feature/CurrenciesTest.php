<?php

use Hawara\SpanishLocales\Currencies;

test('iterates through the currencies', function () {
    $currencies = (new Currencies)->iterate();
    $currency = $currencies->current();

    expect($currency)->toHaveProperty('letter_code');
    expect($currency)->toHaveProperty('numeric_code');
});

test('translates the currencies to the selected languages', function () {
    $currencies = (new Currencies(languages: ['es']))->iterate();
    $currency = $currencies->current();

    expect($currency)->toHaveProperty('translations');
    expect($currency->translations)->toHaveProperty('es');
});

test('returns the path to the currencies file', function () {
    $currenciesPath = (new Currencies)->getPath();

    expect(file_exists($currenciesPath))->toBeTrue();
});
