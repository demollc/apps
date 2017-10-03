<?php

class appsContactsBackend_sidebarHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = array("top_li"))
    {
        $event = wa('apps')->event('contacts.backend_sidebar', $params, $array_keys);
        return ifempty($event);
    }
}
