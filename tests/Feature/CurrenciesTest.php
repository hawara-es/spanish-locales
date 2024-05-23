<?php

use Hawara\SpanishLocales\Currencies;

test('iterates through the currencies', function () {
    $currencies = (new Currencies)->iterate();
    $currency = $currencies->current();

    expect($currency)->toHaveProperty('letter_code');
    expect($currency)->toHaveProperty('numeric_code');
});
