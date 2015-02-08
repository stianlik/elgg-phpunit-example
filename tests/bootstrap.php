<?php
if (is_readable('vendor/autoload.php')) {
    define('ELGG_PHPUNIT_AUTOLOADER', true);
    require 'vendor/autoload.php';
}
require_once 'engine/start.php';
