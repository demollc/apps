<?php

class appsContactsProfiletabHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('contacts.profile.tab', $params, $array_keys);
    }
}
