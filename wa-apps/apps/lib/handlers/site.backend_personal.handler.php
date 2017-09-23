<?php

class appsSiteBackend_personalHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
		$event = wa('apps')->event('site.backend_personal', $params, $array_keys);
        return ifempty($event);
    }
}
