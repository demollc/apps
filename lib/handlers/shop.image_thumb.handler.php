<?php

class appsShopImage_thumbHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null)
    {
        $event = wa('apps')->event('shop.image_thumb', $params, $array_keys);
        return ifempty($event);
    }
}
