<?php

class appsPhotosPhoto_deleteHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null)
    {
        $event = wa('apps')->event('photos.photo_delete', $params, $array_keys);
        return ifempty($event);
    }
}
