<?php

class appsContactsBackend_sidebarHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = array (
  0 => 'top_li',
)){
        return wa('apps')->event('contacts.backend_sidebar', $params, $array_keys);
    }
}
