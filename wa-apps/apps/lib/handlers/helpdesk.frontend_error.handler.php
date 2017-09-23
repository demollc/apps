<?php

class appsHelpdeskFrontend_errorHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
		$event = wa('apps')->event('helpdesk.frontend_error', $params, $array_keys);
        return ifempty($event);
    }
}
