<?php

namespace App\Router\Services;

use App\Router\DTO\Routes;
use App\Router\DTO\Queries;
use App\Router\DTO\Url;

class QueriesResolver
{
    private array $queries = [];

    public function __construct(private Routes $Routes, private Url $Url)
    {}

    public function getQueries(): Queries
    {
        $this->resolveQueries();

        return new Queries($this->queries);
    }

    /** ------------------------------------------------------------------------------------------------------------ **/
    /** Private.
    /** ------------------------------------------------------------------------------------------------------------ **/

    private function resolveQueries(): void
    {
        foreach ($this->Routes->getRoutes() as $route) {

            $url = $this->Url->getUrl();
            $slugCount = $route['queries'] ?? 0;
            $explodedUrl = explode('/', $url);
            $queries = [];

            for ($count = 1; $count <= $slugCount; $count ++) {

                $queries[] = array_pop($explodedUrl);
            }

            $implodedUrl = implode('/', $explodedUrl);

            if ($route['endpoint'] === $implodedUrl) {

                $this->queries = $queries;
            }
        }
    }
}
