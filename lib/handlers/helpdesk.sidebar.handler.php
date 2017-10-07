<?php

class appsHelpdeskSidebarHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null)
    {
        $event = wa('apps')->event('helpdesk.sidebar', $params, $array_keys);
        return ifempty($event);
    }
}
