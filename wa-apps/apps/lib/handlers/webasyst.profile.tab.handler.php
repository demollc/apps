<?php

class appsWebasystProfiletabHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
		$event = wa('apps')->event('webasyst.profile.tab', $params, $array_keys);
        return ifempty($event);
    }
}
