<?php

class appsPhotosFrontend_sidebarHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null)
    {
        $event = wa('apps')->event('photos.frontend_sidebar', $params, $array_keys);
        return ifempty($event);
    }
}
