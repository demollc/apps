<?php

class appsPhotosBackend_assetsHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('photos.backend_assets', $params, $array_keys);
    }
}
