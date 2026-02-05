<?php

namespace App\Tools;

class Lock {

/** -------------------------------------------------------------------------------------------- */
    
    static function file($resource): bool {

        $attempt = 5;
        $lock    = null;

        while ($attempt > 0):

            $lock = flock($resource, LOCK_EX | LOCK_NB);

            if (!$lock):

                sleep(1);
                $attempt--;

                if ($attempt === 0):

                    return false;

                endif;

            else:

                $attempt = 0;

            endif;

        endwhile;

        return true;
    }
}
