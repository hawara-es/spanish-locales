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

test('translates the countries to the selected languages', function () {
    $countries = (new Countries(languages: ['es']))->iterate();
    $country = $countries->current();

    expect($country)->toHaveProperty('translations');
    expect($country->translations)->toHaveProperty('es');
});

test('returns the path to the countries file', function () {
    $countriesPath = (new Countries)->getPath();

    expect(file_exists($countriesPath))->toBeTrue();
});
