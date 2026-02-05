<?php

namespace App\Tools;

use App\Types\DateType;

class Convert {

/** -------------------------------------------------------------------------------------------- */

    static function date(int|string $date, string $format = 'stamp'): int|string|false {

        /**
         * Unix date needs an '@' symbol in front.
         */
        if (is_numeric($date) && is_int($date)):

            $timeObject = new \DateTimeImmutable('@' . $date);

        else:

            $timeObject = new \DateTimeImmutable($date);

        endif;

        $basic = $timeObject->format('Y/m/d');
        $stamp = $timeObject->format('Y/m/d H:i:s');
        $unix  = $timeObject->format('U');
        $atom  = $timeObject->format(DATE_ATOM);

        return $$format ? $$format : false;
    }
}
