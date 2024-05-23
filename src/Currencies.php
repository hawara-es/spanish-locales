<?php

namespace Hawara\SpanishLocales;

use Hawara\SpanishLocales\Contracts\Accessible;
use Hawara\SpanishLocales\Contracts\Iteratable;

class Currencies implements Accessible, Iteratable
{
    public function __construct(
        protected ?string $path = null,
    ) {
        $this->path = $path ?? realpath(__DIR__.'/../data/currencies.json');
    }

    public function path(): string
    {
        return $this->path;
    }

    public function iterate(): \Generator
    {
        $content = file_get_contents($this->path());

        foreach (json_decode($content) as $currency) {
            yield $currency;
        }
    }
}
