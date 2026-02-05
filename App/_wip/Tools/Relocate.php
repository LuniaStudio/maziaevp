<?php

namespace App\Tools;

class Relocate {

/** -------------------------------------------------------------------------------------------- */

    static function page(string $url = URL . '404'): void {

        header('Location: ' . $url);
    }
}
