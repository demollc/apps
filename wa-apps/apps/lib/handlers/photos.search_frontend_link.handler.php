<?php

class appsPhotosSearch_frontend_linkHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('photos.search_frontend_link', $params, $array_keys);
    }
}
