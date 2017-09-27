<?php

class appsPhotosPrepare_photos_frontendHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
		$event = wa('apps')->event('photos.prepare_photos_frontend', $params, $array_keys);
        return ifempty($event);
    }
}
