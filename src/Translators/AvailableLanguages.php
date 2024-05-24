<?php

namespace Hawara\SpanishLocales\Translators;

class AvailableLanguages
{
    public static function areLanguagesAvailable(string ...$languages): bool
    {
        foreach ($languages as $language) {
            if (! self::isLanguageAvailable($language)) {
                return false;
            }
        }

        return true;
    }

    public static function isLanguageAvailable(string $language): bool
    {
        return in_array($language, ['ca', 'es', 'eu', 'gl']);
    }
}
