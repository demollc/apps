<?php

class appsWebasystBackend_headerHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null)
    {
        $event = wa('apps')->event('webasyst.backend_header', $params, $array_keys);
        return ifempty($event);
    }
}
