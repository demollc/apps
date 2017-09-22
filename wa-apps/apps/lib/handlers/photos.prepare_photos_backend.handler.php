<?php

class appsPhotosPrepare_photos_backendHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('photos.prepare_photos_backend', $params, $array_keys);
    }
}
