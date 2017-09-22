<?php

class appsWebasystBackend_dispatch_missHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('webasyst.backend_dispatch_miss', $params, $array_keys);
    }
}
