<?php

namespace App\Presenters\DTO;

class Styles
{
    public function __construct(private string $styles)
    {}

    public function getStyles(): string
    {
        return $this->styles ?? '';
    }
}
