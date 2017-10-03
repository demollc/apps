<?php

class appsPhotosRoutingHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null)
    {
        $event = wa('apps')->event('photos.routing', $params, $array_keys);
        return ifempty($event);
    }
}
