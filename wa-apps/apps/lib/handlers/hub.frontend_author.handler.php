<?php

class appsHubFrontend_authorHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null)
    {
        $event = wa('apps')->event('hub.frontend_author', $params, $array_keys);
        return ifempty($event);
    }
}
