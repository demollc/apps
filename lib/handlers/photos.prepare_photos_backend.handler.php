<?php

class appsPhotosPrepare_photos_backendHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null)
    {
        $event = wa('apps')->event('photos.prepare_photos_backend', $params, $array_keys);
        return ifempty($event);
    }
}
