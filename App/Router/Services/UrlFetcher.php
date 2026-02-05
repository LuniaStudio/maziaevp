<?php

namespace App\Router\Services;

use App\Router\DTO\Url;

class UrlFetcher
{
    private string $url;

    public function getUrl(): Url
    {
        $this->fetchUrl();

        return new Url($this->url);
    }

    /** ------------------------------------------------------------------------------------------------------------ **/
    /** Private.
    /** ------------------------------------------------------------------------------------------------------------ **/

    private function fetchUrl()
    {
        $this->url = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        $this->url = rtrim($this->url, '/');
    }
}
