<?php

class appsHubFrontend_errorHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('hub.frontend_error', $params, $array_keys);
    }
}
