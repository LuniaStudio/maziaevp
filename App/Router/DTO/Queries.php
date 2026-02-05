<?php

namespace App\Router\DTO;

class Queries
{
    public function __construct(private array $queries)
    {}

    public function getQueries(): array
    {
        return $this->Queries ?? [];
    }
}
