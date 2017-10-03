<?php

class appsPhotosPhoto_uploadHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null)
    {
        $event = wa('apps')->event('photos.photo_upload', $params, $array_keys);
        return ifempty($event);
    }
}
