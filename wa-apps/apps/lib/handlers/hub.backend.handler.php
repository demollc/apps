<?php

class appsHubBackendHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('hub.backend', $params, $array_keys);
    }
}
