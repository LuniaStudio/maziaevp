<?php

use App\Router\Router;

require_once __DIR__ . '/../Bootstrap/config.php';
require_once ROOT . 'Bootstrap/autoload.php';

try {

    $Router = new Router();

    $Router->attachPage(URL, 0, 'IndexController');
    $Router->attachPage(URL . 'development', 0, 'DevelopmentController');
    $Router->attachPage(URL . 'integrations', 0, 'IntegrationsController');
    $Router->attachPage(URL . 'reporting', 0, 'ReportingController');
    $Router->attachPage(URL . 'apps', 0, 'AppsController');
    $Router->attachPage(URL . 'privacy-policy', 0, 'PrivacyPolicyController');
    $Router->attachPage(URL . 'offices', 0, 'OfficesController');
    $Router->attachPage(URL . '404', 0, 'Error404Controller');

    $Router->attachPage(URL . 'apps/register', 0, 'AppsRegisterController');
    $Router->attachPage(URL . 'apps/infor', 0, 'InforAppsController');
    $Router->attachPage(URL . 'apps/alpha-transform', 0, 'AlphaTransformAppsController');
    $Router->attachPage(URL . 'apps/microsoft-365', 0, 'Microsoft365AppsController');
    $Router->attachPage(URL . 'apps/sophos', 0, 'SophosAppsController');
    $Router->attachPage(URL . 'apps/rea-vetta', 0, 'ReaVettaAppsController');
    $Router->attachPage(URL . 'apps/lrc', 0, 'LrcAppsController');
    $Router->attachPage(URL . 'apps/lunia-studio', 0, 'LuniaStudioAppsController');

    $Router->callRoute();

} catch(Exception $Exception) {

    echo $Exception->getMessage();
}
