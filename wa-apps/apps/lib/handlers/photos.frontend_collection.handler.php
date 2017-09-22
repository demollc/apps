<?php

class appsPhotosFrontend_collectionHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('photos.frontend_collection', $params, $array_keys);
    }
}
