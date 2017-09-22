<?php

class appsHelpdeskRequest_createdHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('helpdesk.request_created', $params, $array_keys);
    }
}
