<?php

class appsContactsBackend_assetsHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
		$event = wa('apps')->event('contacts.backend_assets', $params, $array_keys);
        return ifempty($event);
    }
}
