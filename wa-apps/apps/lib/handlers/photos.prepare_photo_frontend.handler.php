<?php

class appsPhotosPrepare_photo_frontendHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null)
    {
        $event = wa('apps')->event('photos.prepare_photo_frontend', $params, $array_keys);
        return ifempty($event);
    }
}
