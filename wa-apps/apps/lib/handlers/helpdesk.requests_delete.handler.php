<?php

class appsHelpdeskRequests_deleteHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('helpdesk.requests_delete', $params, $array_keys);
    }
}
