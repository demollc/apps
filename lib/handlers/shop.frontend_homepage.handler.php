<?php

class appsShopFrontend_homepageHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null)
    {
        $event = wa('apps')->event('shop.frontend_homepage', $params, $array_keys);
        return ifempty($event);
    }
}
