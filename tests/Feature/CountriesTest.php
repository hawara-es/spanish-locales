<?php

use Hawara\SpanishLocales\Countries;

test('iterates through the countries', function () {
    $countries = (new Countries)->iterate();
    $country = $countries->current();

    expect($country)->toHaveProperty('alpha_2');
    expect($country)->toHaveProperty('alpha_3');
    expect($country)->toHaveProperty('numeric_code');
    expect($country)->toHaveProperty('flag');
});

test('returns the path to the countries file', function () {
    $countriesPath = (new Countries)->path();

    expect(file_exists($countriesPath))->toBeTrue();
});
