<?php

class appsHelpdeskRequest_actionHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('helpdesk.request_action', $params, $array_keys);
    }
}
