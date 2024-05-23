<?php

use Hawara\SpanishLocales\Languages;

test('iterates through the languages', function () {
    $languages = (new Languages)->iterate();
    $language = $languages->current();

    expect($language)->toHaveProperty('alpha_2');
    expect($language)->toHaveProperty('alpha_3');
});
