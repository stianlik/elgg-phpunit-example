DIR = $(shell pwd)

install:
	patch vendor/elgg/elgg/engine/start.php < build/start.php.patch
	patch vendor/elgg/elgg/engine/load.php < build/load.php.patch
	ln -s `pwd` vendor/elgg/elgg/mod/`basename $(DIR)`
	php build/install.php

uninstall:
	mysql -utest -ptest test -e "drop database test; create database test;";
	rm -f vendor/elgg/elgg/mod/`basename $(DIR)`
	rm -f vendor/elgg/elgg/engine/settings.php 

test:
	phpunit
