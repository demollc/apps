<?php

class appsHubFrontend_navHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('hub.frontend_nav', $params, $array_keys);
    }
}
