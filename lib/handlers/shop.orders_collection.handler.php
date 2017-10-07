<?php

class appsShopOrders_collectionHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null)
    {
        $event = wa('apps')->event('shop.orders_collection', $params, $array_keys);
        return ifempty($event);
    }
}
