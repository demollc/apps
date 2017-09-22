<?php

class appsPhotosFrontend_photoHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('photos.frontend_photo', $params, $array_keys);
    }
}
