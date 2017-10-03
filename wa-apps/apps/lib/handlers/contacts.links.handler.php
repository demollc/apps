<?php

class appsContactsLinksHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null)
    {
        $event = wa('apps')->event('contacts.links', $params, $array_keys);
        return ifempty($event);
    }
}
