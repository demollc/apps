<?php

class appsHubFrontend_tagHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null)
    {
        $event = wa('apps')->event('hub.frontend_tag', $params, $array_keys);
        return ifempty($event);
    }
}
