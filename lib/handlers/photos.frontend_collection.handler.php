<?php

class appsPhotosFrontend_collectionHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null)
    {
        $event = wa('apps')->event('photos.frontend_collection', $params, $array_keys);
        return ifempty($event);
    }
}
