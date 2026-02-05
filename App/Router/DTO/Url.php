<?php

namespace App\Router\DTO;

class Url
{
    public function __construct(private string $url)
    {}

    public function getUrl(): string
    {
        return $this->url ?? '';
    }
}
