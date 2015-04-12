# Example on PHPUnit for Elgg plugins

This is an example plugin for unit testing in Elgg. For your own plugins you
can probably do not need `install.php`, it is included so that you don't have
to worry about installing Elgg and activate the plugin manually.

1. Install Elgg

2. Clone this repository into Elggs plugin directory

3. Create test database

	```SQL
	CREATE DATABASE elggtest;
	GRANT ALL on elggtest.* TO 'elggtest'@'localhost' IDENTIFIED BY 'elggtest';
	```

4. Install Elgg into test database and activate plugin

	```Shell
	php install.php
	```

5. Start testing

	```Shell
	../../vendor/bin/phpunit
	```
