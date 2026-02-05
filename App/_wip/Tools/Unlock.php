<?php

namespace App\Tools;

class Unlock {

/** -------------------------------------------------------------------------------------------- */

    static function file($resource) {

        flock($resource, LOCK_UN);
    }
}
