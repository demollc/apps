<?php

class appsPhotosMake_stackHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('photos.make_stack', $params, $array_keys);
    }
}
