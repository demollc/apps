<?php

class appsHubFrontend_footerHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('hub.frontend_footer', $params, $array_keys);
    }
}
