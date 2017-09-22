<?php

class appsHelpdeskJson_controllerHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('helpdesk.json_controller', $params, $array_keys);
    }
}
