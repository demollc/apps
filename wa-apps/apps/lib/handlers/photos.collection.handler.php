<?php

class appsPhotosCollectionHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
		$event = wa('apps')->event('photos.collection', $params, $array_keys);
        return ifempty($event);
    }
}
