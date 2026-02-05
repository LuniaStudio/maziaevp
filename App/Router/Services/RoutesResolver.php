<?php

namespace App\Router\Services;

use Exception;
use App\Router\DTO\Routes;

class RoutesResolver
{
    private array $resolvedRoutes;

    public function __construct(private array $routes, private string $pagesPath, private string $postPath)
    {}

    public function getRoutes(): Routes
    {
        $this->resolveRoutes();

        return new Routes($this->resolvedRoutes);
    }

    /** ------------------------------------------------------------------------------------------------------------ **/
    /** Private.
    /** ------------------------------------------------------------------------------------------------------------ **/

    private function resolveRoutes()
    {
        foreach ($this->routes as $route) {

            $endpoint = rtrim($route[0], '/');
            $queries = $route[1];
            $controllerName = $route[2];
            $type = $route[3];

            $this->validateType($type);

            $controller = $this->resolveControllerPath($type, $controllerName);

            $this->addResolvedRoute($endpoint, $queries, $controller);
        }
    }

    private function validateType(string $type): void
    {
        if ($type !== 'page' && $type !== 'post') {

            throw new Exception('Invalid HTTP type', 400);
        }
    }

    private function resolveControllerPath(string $type, string $controllerName): string
    {
        if ($type === 'page') {

            return $this->pagesPath . $controllerName;

        } elseif ($type === 'post') {

            return $this->postPath . $controllerName;
        }
    }

    private function addResolvedRoute(string $endpoint, int $queries, string $controller)
    {
        $this->resolvedRoutes[] = [
            'endpoint' => $endpoint,
            'queries' => $queries,
            'controller' => $controller
        ];
    }
}
