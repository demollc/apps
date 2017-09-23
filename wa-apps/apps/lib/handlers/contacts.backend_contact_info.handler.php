<?php

class appsContactsBackend_contact_infoHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
		$event = wa('apps')->event('contacts.backend_contact_info', $params, $array_keys);
        return ifempty($event);
    }
}
