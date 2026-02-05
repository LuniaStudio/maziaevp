<?php

namespace App\Responses;

use App\Tools\Relocate;

class PageResponse implements RelocationResponseInterface {

/** -------------------------------------------------------------------------------------------- */

    private string $url = '';

/** -------------------------------------------------------------------------------------------- */

    function setStatus(int|string $status): void {

        header($_SERVER['SERVER_PROTOCOL'] . ' ' . $status);
    }

/** -------------------------------------------------------------------------------------------- */

    function setUrl(string $url): void {

        $this->url = $url;
    }

/** -------------------------------------------------------------------------------------------- */

    function respond(): void {

        Relocate::page($this->url);
    }
}
