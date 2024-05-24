<?php

namespace Hawara\SpanishLocales\Translators;

use Hawara\SpanishLocales\Contracts\Accessible;
use Hawara\SpanishLocales\Contracts\Translatable;

abstract class AbstractTranslator implements Accessible, Translatable
{
    protected string $language;
    protected string $path;
    protected object $dictionary;

    public function getPath(): string
    {
        return $this->path;
    }

    public function getLanguage(): string
    {
        return $this->language;
    }

    public function translate(string $key): ?string
    {
        return $this->dictionary?->$key ?? null;
    }

    public function getDictionary(): object
    {
        return $this->dictionary;
    }
}
