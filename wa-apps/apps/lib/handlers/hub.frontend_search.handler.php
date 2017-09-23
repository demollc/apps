<?php

class appsHubFrontend_searchHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
		$event = wa('apps')->event('hub.frontend_search', $params, $array_keys);
        return ifempty($event);
    }
}
