<?php

namespace App\Router\Services;

use App\Router\DTO\Routes;
use App\Router\DTO\Queries;
use App\Router\DTO\Url;

class ControllerCaller
{
    private $Controller;

    public function __construct(private Routes $Routes, private Url $Url, private Queries $Queries)
    {}

    public function callController(): void
    {
        $this->matchUrlToRoute();

        $Controller = new $this->Controller($this->Queries->getQueries());

        $Controller->callController();
    }

    /** ------------------------------------------------------------------------------------------------------------ **/
    /** Private.
    /** ------------------------------------------------------------------------------------------------------------ **/

    private function matchUrlToRoute(): void
    {
        foreach ($this->Routes->getRoutes() as $route) {

            if ($route['endpoint'] === $this->Url->getUrl()) {

                $this->Controller = $route['controller'];
            }
        }
    }
}
