<?php

class appsHubFrontend_headerHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null)
    {
        $event = wa('apps')->event('hub.frontend_header', $params, $array_keys);
        return ifempty($event);
    }
}
