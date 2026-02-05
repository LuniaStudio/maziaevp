<?php

/**
 * Declarations.
 */

declare(strict_types = 1);

/**
 * URLs and paths.
 */
// const ROOT = '/home/u374512985/domains/maziaevp.com/';
// const URL = 'https://www.maziaevp.com/';
const ROOT = '/Users/macbook/Sites/maziaevp/';
const URL = 'http://localhost:8888/maziaevp/public_html/';

/**
 * Paths.
 */

const CONTROLLERS = ROOT . 'App/Controllers/';
const MARKUP = ROOT . 'Resources/Markup/';
const CSS = ROOT . 'Resources/Css/';
const SESSION = ROOT . 'Storage/Session/';

/**
 * Session folder.
 */
session_save_path(SESSION);

/**
 * Locale.
 */
date_default_timezone_set('UTC');
setlocale(LC_ALL, 'en_GB.utf8');

/**
 * Execution timeout.
 */
set_time_limit(10);

/**
 * Session.
 */
session_start([
    // 'cookie_secure'   => 1,
    // 'cookie_lifetime' => 1800,
    // 'cookie_httponly' => 1,
    // 'cookie_samesite' => 'strict',
    // 'use_strict_mode' => 1
]);
