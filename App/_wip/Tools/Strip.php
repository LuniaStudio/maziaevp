<?php

namespace App\Tools;

class Strip {

/** -------------------------------------------------------------------------------------------- */

    static function html(string|array $input): string|array {

        $chars = ['<', '[', '*'];

        return str_replace($chars, ' ', $input);
    }
}
