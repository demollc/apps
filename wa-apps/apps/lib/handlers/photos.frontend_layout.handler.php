<?php

class appsPhotosFrontend_layoutHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
		$event = wa('apps')->event('photos.frontend_layout', $params, $array_keys);
        return ifempty($event);
    }
}
