<?php

class ExampleTest extends PHPUnit_Framework_TestCase
{
    public function test_plugin_shouldExist()
    {
		$this->assertTrue(elgg_plugin_exists('elgg-phpunit'));
    }
	
	public function test_config_shouldBeEnrichedByTestSetup()
	{
		$this->assertTrue(elgg_get_config('phpunit'));
	}
}
