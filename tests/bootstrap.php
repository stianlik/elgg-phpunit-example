<?php
if (is_readable('vendor/autoload.php')) {
    define('ELGG_PHPUNIT_AUTOLOADER', true);
    require 'vendor/autoload.php';
}

if (!stream_resolve_include_path('engine/settings.php')) {
    global $CONFIG;
    $CONFIG = new stdClass();
    $CONFIG->site_guid = 0;
    $CONFIG->i18n_loaded_from_cache = false;
    $CONFIG->dbuser = '';
    $CONFIG->dbpass = '';
    $CONFIG->dbname = '';

    require_once 'settings.phpunit.php';

    $installer = new ElggInstaller();
    $installer->batchInstall(array(
	    // database parameters
	    'dbuser' => $CONFIG->dbuser,
	    'dbpassword' => $CONFIG->dbpass,
	    'dbname' => $CONFIG->dbname,

	    // site settings
	    'sitename' => 'Test site',
	    'siteemail' => 'test@test.com',
	    'wwwroot' => 'http://localhost/',
	    'dataroot' => 'data/',
	    'path' => 'vendor/elgg/elgg/',

	    // admin account
	    'displayname' => 'Administrator',
	    'email' => 'administrator@test.com',
	    'username' => 'administrator',
	    'password' => 'administrator',
    ));

    elgg_set_ignore_access(true);

    // Activate plugin
	$path = _elgg_services()->config->getPluginsPath() . basename(realpath(__DIR__ . '/..'));
    $plugin = new ElggPlugin($path);
	$plugin->save();
	$plugin->activate();

    echo "Elgg installed, please re-run tests\n";
    exit;
}

require_once 'engine/start.php';
