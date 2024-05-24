<?php

namespace Hawara\SpanishLocales\Contracts;

interface Translatable
{
    public function getLanguage(): string;

    public function getDictionary(): object;

    public function translate(string $key): ?string;
}
