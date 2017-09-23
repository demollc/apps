<?php

class appsHubFrontend_navHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
		$event = wa('apps')->event('hub.frontend_nav', $params, $array_keys);
        return ifempty($event);
    }
}
