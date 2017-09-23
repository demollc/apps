<?php

class appsShopOrders_collectionfilterHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
		$event = wa('apps')->event('shop.orders_collection.filter', $params, $array_keys);
        return ifempty($event);
    }
}
