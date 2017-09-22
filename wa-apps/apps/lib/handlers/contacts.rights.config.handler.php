<?php

class appsContactsRightsconfigHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('contacts.rights.config', $params, $array_keys);
    }
}
