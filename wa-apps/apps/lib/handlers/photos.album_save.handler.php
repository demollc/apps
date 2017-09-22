<?php

class appsPhotosAlbum_saveHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('photos.album_save', $params, $array_keys);
    }
}
