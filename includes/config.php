<?php

define('SITE_URL',  'https://zaazplanos.com.br');
define('SITE_NAME', 'ZaazPlanos');
define('SITE_LANG', 'pt-BR');

// Ambiente: 'production' | 'development'
define('ENV', 'production');

if (ENV === 'development') {
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
} else {
    ini_set('display_errors', 0);
    error_reporting(0);
}
