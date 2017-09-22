<?php

class appsHubFrontend_headerHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('hub.frontend_header', $params, $array_keys);
    }
}
