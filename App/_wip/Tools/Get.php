<?php

namespace App\Tools;

class Get {

/** -------------------------------------------------------------------------------------------- */

    static function array(string $path): array|false {

        $contents = file_get_contents($path);
        $json     = json_decode($contents, true);

        if (!json_encode($json)) return false;

        return $json;
    }

/** -------------------------------------------------------------------------------------------- */

    static function string(string $path): string|false {

        return file_get_contents($path);
    }
}
