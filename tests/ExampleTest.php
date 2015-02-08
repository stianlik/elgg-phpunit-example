<?php

class ExampleTest extends PHPUnit_Framework_TestCase
{
    public function testSomething()
    {
        $this->assertEquals('started', elgg_get_config('my_plugin_init'));
    }
}
