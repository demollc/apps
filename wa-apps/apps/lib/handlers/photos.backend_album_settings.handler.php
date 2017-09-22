<?php

class appsPhotosBackend_album_settingsHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('photos.backend_album_settings', $params, $array_keys);
    }
}
