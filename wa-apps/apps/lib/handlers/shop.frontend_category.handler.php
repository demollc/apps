<?php

class appsShopFrontend_categoryHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null)
    {
        $event = wa('apps')->event('shop.frontend_category', $params, $array_keys);
        return ifempty($event);
    }
}
