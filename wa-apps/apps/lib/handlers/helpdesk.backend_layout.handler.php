<?php

class appsHelpdeskBackend_layoutHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null)
    {
        $event = wa('apps')->event('helpdesk.backend_layout', $params, $array_keys);
        return ifempty($event);
    }
}
