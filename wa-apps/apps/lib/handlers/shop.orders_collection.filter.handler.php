<?php

class appsShopOrders_collectionfilterHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('shop.orders_collection.filter', $params, $array_keys);
    }
}
