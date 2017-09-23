<?php

class appsWebasystSignupHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
		$event = wa('apps')->event('webasyst.signup', $params, $array_keys);
        return ifempty($event);
    }
}
