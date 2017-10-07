<?php

class appsBlogRoutingHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null)
    {
        $event = wa('apps')->event('blog.routing', $params, $array_keys);
        return ifempty($event);
    }
}
