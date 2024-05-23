<?php

namespace Hawara\SpanishLocales;

use Hawara\SpanishLocales\Contracts\Iteratable;

class SubdivisionTypes implements Iteratable
{
    public function __construct(
        protected ?string $path = null,
    ) {
        $this->path = $path ?? realpath(__DIR__.'/../data/subdivision_types.json');
    }

    public function iterate(): \Generator
    {
        $content = file_get_contents($this->path);

        foreach (json_decode($content) as $subdivisionType) {
            yield $subdivisionType;
        }
    }
}
