<?php

namespace Hawara\SpanishLocales\Translators;

use Hawara\SpanishLocales\Contracts\Accessible;
use Hawara\SpanishLocales\Contracts\Translatable;

class LanguageTranslator extends AbstractTranslator implements Accessible, Translatable
{
    public function __construct(
        string $language,
        ?string $path = null,
    ) {
        if (! AvailableLanguages::isLanguageAvailable($language)) {
            throw new \Exception('Invalid language '.$language);
        }

        $this->language = $language;
        $this->path = $path ?? realpath(__DIR__."/../../translations/$language/languages.json");
        $content = file_get_contents($this->path);
        $this->dictionary = json_decode($content);
    }
}
