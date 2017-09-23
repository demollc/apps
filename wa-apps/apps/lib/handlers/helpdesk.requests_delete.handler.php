<?php

class appsHelpdeskRequests_deleteHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
		$event = wa('apps')->event('helpdesk.requests_delete', $params, $array_keys);
        return ifempty($event);
    }
}
