<?php

namespace App\Router\Services;

use Exception;
use App\Router\DTO\Routes;
use App\Router\DTO\Url;

class UrlResolver
{
    private string $matchingUrl = '';

    public function __construct(private Routes $Routes, private Url $Url)
    {}

    public function getUrl(): Url
    {
        $this->resolveUserEndpoint();

        return new Url($this->matchingUrl);
    }

    /** ------------------------------------------------------------------------------------------------------------ **/
    /** Private.
    /** ------------------------------------------------------------------------------------------------------------ **/

    private function resolveUserEndpoint(): void
    {
        foreach ($this->Routes->getRoutes() as $route) {

            $url = $this->Url->getUrl();
            $slugCount = $route['queries'] ?? 0;
            $explodedUrl = explode('/', $url);

            for ($count = 1; $count <= $slugCount; $count ++) {

                array_pop($explodedUrl);
            }

            $implodedUrl = implode('/', $explodedUrl);

            if ($route['endpoint'] === $implodedUrl) {

                $this->matchingUrl = $implodedUrl;
            }
        }

        if (empty($this->matchingUrl)) {

            $this->matchingUrl = URL . '404';
        }
    }
}
