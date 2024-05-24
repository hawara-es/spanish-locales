<?php

use Hawara\SpanishLocales\SubdivisionTypes;

test('iterates through the subdivisionTypes', function () {
    $subdivisionTypes = (new SubdivisionTypes)->iterate();
    $subdivisionType = $subdivisionTypes->current();

    expect($subdivisionType)->toHaveProperty('internal_code');
});

test('translates the subdivision types to the selected languages', function () {
    $subdivisionTypes = (new SubdivisionTypes(languages: ['es']))->iterate();
    $subdivisionType = $subdivisionTypes->current();

    expect($subdivisionType)->toHaveProperty('translations');
    expect($subdivisionType->translations)->toHaveProperty('es');
});
