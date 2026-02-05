<?php

namespace App\Tools;

class Check
{
    static function safe(mixed $input): bool
    {
        $chars = ['<', '&', '->', '$this', 'self::'];

        if (is_array($input)) $input = json_encode($input);

        foreach ($chars as $char) if (str_contains($input, $char)) return false;

        return true;
    }

    static function text(string $input): bool
    {
        if (!preg_match('/^[0-9A-zÀ-ÖØ-öø-ÿ_ -\']+$/', $input)) return false;

        return true;
    }
}
