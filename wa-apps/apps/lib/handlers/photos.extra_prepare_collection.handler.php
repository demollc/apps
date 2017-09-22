<?php

class appsPhotosExtra_prepare_collectionHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('photos.extra_prepare_collection', $params, $array_keys);
    }
}
