<?php

namespace App\Router;

use App\Router\DTO\Queries;
use App\Router\DTO\Routes;
use App\Router\DTO\Url;
use App\Router\Services\ControllerCaller;
use App\Router\Services\HoneypotValidator;
use App\Router\Services\QueriesResolver;
use App\Router\Services\RoutesResolver;
use App\Router\Services\UrlFetcher;
use App\Router\Services\UrlResolver;

class Router
{
    const PAGES_PATH = 'App\\Controllers\\Pages\\';
    const POST_PATH = 'App\\Controllers\\Post\\';

    private array $routes = [];
    private Queries $Queries;
    private Routes $Routes;
    private Url $ResolvedUrl;
    private Url $Url;

    public function attachPage(string $endpoint, int $queries, string $controller)
    {
        $this->routes[] = [$endpoint, $queries, $controller, 'page'];
    }

    public function attachPost(string $endpoint, int $queries, string $controller)
    {
        $this->routes[] = [$endpoint, $queries, $controller, 'post'];
    }

    public function callRoute()
    {
        $this->setHoneypotValidator();

        $this->setUrlFetcher();

        $this->setRoutesResolver();

        $this->setUrlResolver();

        $this->setQueriesResolver();

        $this->setControllerCaller();
    }

    /** ------------------------------------------------------------------------------------------------------------ **/
    /** Private.
    /** ------------------------------------------------------------------------------------------------------------ **/

    private function setHoneypotValidator(): void
    {
        $HoneypotValidator = new HoneypotValidator();

        $HoneypotValidator->validateHoneypot();
    }

    private function setUrlFetcher(): void
    {
        $UrlFetcher = new UrlFetcher();

        $this->Url = $UrlFetcher->getUrl();
    }

    public function setRoutesResolver()
    {
        $RoutesResolver = new RoutesResolver($this->routes, self::PAGES_PATH, self::POST_PATH);

        $this->Routes = $RoutesResolver->getRoutes();
    }

    private function setUrlResolver(): void
    {
        $UrlResolver = new UrlResolver($this->Routes, $this->Url);

        $this->ResolvedUrl = $UrlResolver->getUrl();
    }

    private function setQueriesResolver() {

        $QueriesResolver = new QueriesResolver($this->Routes, $this->Url);

        $this->Queries = $QueriesResolver->getQueries();
    }

    private function setControllerCaller() {

        $ControllerCaller = new ControllerCaller($this->Routes, $this->ResolvedUrl, $this->Queries);

        $ControllerCaller->callController();
    }
}
