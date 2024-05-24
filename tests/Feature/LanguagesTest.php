<?php

use Hawara\SpanishLocales\Languages;

test('iterates through the languages', function () {
    $languages = (new Languages)->iterate();
    $language = $languages->current();

    expect($language)->toHaveProperty('alpha_2');
    expect($language)->toHaveProperty('alpha_3');
});

test('translates the languages to the selected languages', function () {
    $languages = (new Languages(languages: ['es']))->iterate();
    $language = $languages->current();

    expect($language)->toHaveProperty('translations');
    expect($language->translations)->toHaveProperty('es');
});

test('returns the path to the languages file', function () {
    $languagesPath = (new Languages)->getPath();

    expect(file_exists($languagesPath))->toBeTrue();
});
