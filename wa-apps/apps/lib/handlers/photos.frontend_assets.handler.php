<?php

class appsPhotosFrontend_assetsHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('photos.frontend_assets', $params, $array_keys);
    }
}
