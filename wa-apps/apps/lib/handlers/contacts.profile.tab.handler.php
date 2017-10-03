<?php

class appsContactsProfiletabHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null)
    {
        $event = wa('apps')->event('contacts.profile.tab', $params, $array_keys);
        return ifempty($event);
    }
}
