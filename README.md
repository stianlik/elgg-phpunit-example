# Example on PHPUnit for Elgg plugins

This is an example plugin for unit testing in Elgg. For your own plugins you
can probably do not need `install.php`, it is included so that you don't have
to worry about installing Elgg and activate the plugin manually.

## Unit testing

This setup is not required for pure unit testing, however it can be useful for
code that use some of Elgg API directly.

## Integration testing

This plugin supports integration testing with Elgg by including the core
in PHPUnit bootstrap script. This can be useful if you need to verify that
your code interacts correctly with the Elgg data model or similar.

## Usage

1. Install Elgg

2. Clone this repository into Elggs plugin directory

3. Create test database

	```SQL
	CREATE DATABASE elggtest;
	GRANT ALL on elggtest.* TO 'elggtest'@'localhost' IDENTIFIED BY 'elggtest';
	```

4. Install Elgg into test database and activate plugin

	```Shell
	php vendor/foogile/elgg-phpunit/install.php
	```

5. Start testing

	```Shell
	phpunit -c vendor/foogile/elgg-phpunit/phpunit.xml
	```

See https://github.com/stianlik/elgg-phpunit for more information.
