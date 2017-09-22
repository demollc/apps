<?php

class appsContactsBackend_last_view_contextHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('contacts.backend_last_view_context', $params, $array_keys);
    }
}
