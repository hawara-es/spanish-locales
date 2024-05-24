<?php

namespace Hawara\SpanishLocales;

abstract class AbstractIterable
{
    protected string $path;
    protected array $items;
    protected array $dictionaries = [];

    public function getPath(): string
    {
        return $this->path;
    }

    public function getItemKey(object $item): string
    {
        return '';
    }

    public function iterate(): \Generator
    {
        foreach ($this->items as $item) {
            $key = $this->getItemKey($item);

            if (count($this->dictionaries)) {
                $item->translations = (object) [];
            }

            foreach ($this->dictionaries as $language => $dictionary) {
                $item->translations->$language = $dictionary->translate($key);
            }

            yield $item;
        }
    }
}
