<?php

class appsShopFrontend_my_ordersHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null)
    {
        $event = wa('apps')->event('shop.frontend_my_orders', $params, $array_keys);
        return ifempty($event);
    }
}
