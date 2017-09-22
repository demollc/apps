<?php

class appsPhotosAlbum_deleteHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('photos.album_delete', $params, $array_keys);
    }
}
