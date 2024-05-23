<?php

use Hawara\SpanishLocales\SubdivisionTypes;

test('iterates through the subdivisionTypes', function () {
    $subdivisionTypes = (new SubdivisionTypes)->iterate();
    $subdivisionType = $subdivisionTypes->current();

    expect($subdivisionType)->toHaveProperty('internal_code');
});
