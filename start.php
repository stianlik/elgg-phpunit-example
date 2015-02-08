<?php
elgg_register_event_handler('init', 'system', 'my_plugin_init');

function my_plugin_init() {
    elgg_set_config('my_plugin_init', 'started');
}
