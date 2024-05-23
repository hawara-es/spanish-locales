<?php

namespace Hawara\SpanishLocales;

use Hawara\SpanishLocales\Contracts\Accessible;
use Hawara\SpanishLocales\Contracts\Iteratable;

class Countries implements Accessible, Iteratable
{
    public function __construct(
        private ?string $path = null,
    ) {
        $this->path = $path ?? realpath(__DIR__.'/../data/countries.json');
    }

    public function path(): string
    {
        return $this->path;
    }

    public function iterate(): \Generator
    {
        $content = file_get_contents($this->path());

        foreach (json_decode($content) as $country) {
            yield $country;
        }
    }
}
