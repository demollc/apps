<?php

class appsPhotosMake_stackHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
		$event = wa('apps')->event('photos.make_stack', $params, $array_keys);
        return ifempty($event);
    }
}
