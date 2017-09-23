<?php

class appsWebasystBackend_personal_profileHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
		$event = wa('apps')->event('webasyst.backend_personal_profile', $params, $array_keys);
        return ifempty($event);
    }
}
