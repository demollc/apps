<?php

class appsShopFrontend_footerHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null)
    {
        $event = wa('apps')->event('shop.frontend_footer', $params, $array_keys);
        return ifempty($event);
    }
}
