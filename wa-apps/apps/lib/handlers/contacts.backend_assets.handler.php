<?php

class appsContactsBackend_assetsHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('contacts.backend_assets', $params, $array_keys);
    }
}
