<?php

class appsSiteRoutingHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null)
    {
        $event = wa('apps')->event('site.routing', $params, $array_keys);
        return ifempty($event);
    }
}
