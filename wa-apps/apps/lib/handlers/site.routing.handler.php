<?php

class appsSiteRoutingHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('site.routing', $params, $array_keys);
    }
}
