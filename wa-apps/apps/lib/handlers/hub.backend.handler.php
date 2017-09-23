<?php

class appsHubBackendHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
		$event = wa('apps')->event('hub.backend', $params, $array_keys);
        return ifempty($event);
    }
}
