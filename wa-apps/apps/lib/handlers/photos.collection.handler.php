<?php

class appsPhotosCollectionHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('photos.collection', $params, $array_keys);
    }
}
