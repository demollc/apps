<?php

class appsHubFrontend_authorHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('hub.frontend_author', $params, $array_keys);
    }
}
