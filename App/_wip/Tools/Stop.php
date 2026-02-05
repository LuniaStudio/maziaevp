<?php

namespace App\Tools;

use App\Logs\ErrorUserLog;
use App\Responses\FormResponse;
use App\Tools\Relocate;

class Stop {

/** -------------------------------------------------------------------------------------------- */

    static function page($status = '400', string $message = ''): void {

        if ($message):

            $Log = new ErrorUserLog($message);
            $Log->write();

        endif;

        Relocate::page(URL . 'errors/' . $status);

        die;
    }

/** -------------------------------------------------------------------------------------------- */

    static function post($status = '400', string $message = ''): void {

        if ($message):

            $Log = new ErrorUserLog($message);
            $Log->write();

        endif;

        $Response = new FormResponse();
        $Response->setStatus($status);
        $Response->setUrl(URL . 'errors/' . $status);
        $Response->respond();

        die;
    }
}
