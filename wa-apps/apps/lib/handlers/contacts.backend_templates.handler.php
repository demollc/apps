<?php

class appsContactsBackend_templatesHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
		$event = wa('apps')->event('contacts.backend_templates', $params, $array_keys);
        return ifempty($event);
    }
}
