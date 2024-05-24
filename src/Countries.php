<?php

namespace Hawara\SpanishLocales;

use Hawara\SpanishLocales\Contracts\Accessible;
use Hawara\SpanishLocales\Contracts\Iteratable;
use Hawara\SpanishLocales\Translators\CountryTranslator;

class Countries extends AbstractIterable implements Accessible, Iteratable
{
    public function __construct(
        ?string $path = null,
        array $languages = [],
    ) {
        $this->path = $path ?? realpath(__DIR__.'/../data/countries.json');
        $content = file_get_contents($this->path);
        $this->items = json_decode($content);
        foreach ($languages as $language) {
            $this->dictionaries[$language] = new CountryTranslator($language);
        }
    }

    public function getItemKey(object $item): string
    {
        return $item->alpha_2;
    }
}
