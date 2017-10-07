<?php

class appsPhotosBackend_photo_toolbarHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null)
    {
        $event = wa('apps')->event('photos.backend_photo_toolbar', $params, $array_keys);
        return ifempty($event);
    }
}
