<?php

namespace Hawara\SpanishLocales;

use Hawara\SpanishLocales\Contracts\Accessible;
use Hawara\SpanishLocales\Contracts\Iteratable;
use Hawara\SpanishLocales\Translators\CurrencyTranslator;

class Currencies extends AbstractIterable implements Accessible, Iteratable
{
    public function __construct(
        ?string $path = null,
        array $languages = [],
    ) {
        $this->path = $path ?? realpath(__DIR__.'/../data/currencies.json');
        $content = file_get_contents($this->path);
        $this->items = json_decode($content);
        foreach ($languages as $language) {
            $this->dictionaries[$language] = new CurrencyTranslator($language);
        }
    }

    public function getItemKey(object $item): string
    {
        return $item->letter_code;
    }
}
