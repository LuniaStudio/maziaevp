<?php

namespace App\Presenters\DTO;

class Markup
{
    public function __construct(private string $markup)
    {}

    public function getMarkup(): string
    {
        return $this->markup ?? '';
    }
}
