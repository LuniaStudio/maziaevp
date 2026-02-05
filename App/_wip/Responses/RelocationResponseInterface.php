<?php

namespace App\Responses;

interface RelocationResponseInterface {

/** -------------------------------------------------------------------------------------------- */

    function setStatus(int|string $status);
    function setUrl(string $url);
    function respond();
}
