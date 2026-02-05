<?php

namespace App\Router\DTO;

class Routes
{
    public function __construct(private array $routes)
    {}

    public function getRoutes(): array
    {
        return $this->routes ?? [];
    }
}
