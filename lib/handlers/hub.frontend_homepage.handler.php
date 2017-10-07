<?php

class appsHubFrontend_homepageHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null)
    {
        $event = wa('apps')->event('hub.frontend_homepage', $params, $array_keys);
        return ifempty($event);
    }
}
