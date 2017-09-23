<?php

class appsCrmSearchconfigHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
		$event = wa('apps')->event('crm.search.config', $params, $array_keys);
        return ifempty($event);
    }
}
