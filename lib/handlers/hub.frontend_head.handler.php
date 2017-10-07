<?php

class appsHubFrontend_headHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null)
    {
        $event = wa('apps')->event('hub.frontend_head', $params, $array_keys);
        return ifempty($event);
    }
}
