<?php

class appsContactsBackend_last_view_contextHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null)
    {
        $event = wa('apps')->event('contacts.backend_last_view_context', $params, $array_keys);
        return ifempty($event);
    }
}
