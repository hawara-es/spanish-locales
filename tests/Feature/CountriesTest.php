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
