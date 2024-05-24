<?php

namespace Hawara\SpanishLocales;

use Hawara\SpanishLocales\Contracts\Accessible;
use Hawara\SpanishLocales\Contracts\Iteratable;
use Hawara\SpanishLocales\Translators\SubdivisionTypeTranslator;

class SubdivisionTypes extends AbstractIterable implements Accessible, Iteratable
{
    public function __construct(
        ?string $path = null,
        array $languages = [],
    ) {
        $this->path = $path ?? realpath(__DIR__.'/../data/subdivision_types.json');
        $content = file_get_contents($this->path);
        $this->items = json_decode($content);
        foreach ($languages as $language) {
            $this->dictionaries[$language] = new SubdivisionTypeTranslator($language);
        }
    }

    public function getItemKey(object $item): string
    {
        return $item->internal_code;
    }
}
