<?php

namespace Hawara\SpanishLocales\Contracts;

interface Iteratable
{
    public function iterate(): \Generator;

    public function getItemKey(object $item): string;
}
