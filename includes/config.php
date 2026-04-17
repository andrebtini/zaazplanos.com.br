<?php

define('SITE_URL',  'https://zaazplanos.com.br');
define('SITE_NAME', 'ZAAZ Internet Fibra');
define('SITE_LANG', 'pt-BR');
define('WHATSAPP',  'https://wa.me/5500000000000'); // ← atualize com o número real

define('ENV', 'production');

if (ENV === 'development') {
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
} else {
    ini_set('display_errors', 0);
    error_reporting(0);
}
