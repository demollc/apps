<?php

class appsContactsLinksHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('contacts.links', $params, $array_keys);
    }
}
