<?php

namespace App\Tools;

class Make {

/** -------------------------------------------------------------------------------------------- */

    static function magicCode(): string {

        return (string) random_int(100000, 999999);
    }

/** -------------------------------------------------------------------------------------------- */

    static function endpointId(): string {

        $chars = '0123456789bcdfghjklmnpqrstvwxyzBCDFGHJKLMNPQRSTVWXYZ';

        return substr(str_shuffle(str_repeat($chars, ceil(8 / strlen($chars)) )), 1, 8);
    }

/** -------------------------------------------------------------------------------------------- */

    static function time(string $format = 'stamp', string $zone = 'UTC'): string|false {

        $timeObject = new \DateTimeImmutable();
        $zoneObject = $timeObject->setTimezone(new \DateTimeZone($zone));

        $stamp = $zoneObject->format('Y/m/d H:i:s');
        $unix  = $zoneObject->format('U');
        $atom  = $zoneObject->format(DATE_ATOM);

        return $$format ? $$format : false;
    }
}
