<?php

class appsShopImage_uploadHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('shop.image_upload', $params, $array_keys);
    }
}
