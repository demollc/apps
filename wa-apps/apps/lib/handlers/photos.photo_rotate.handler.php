<?php

class appsPhotosPhoto_rotateHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('photos.photo_rotate', $params, $array_keys);
    }
}
