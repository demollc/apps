<?php

class appsShopCustomers_collectionHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
		$event = wa('apps')->event('shop.customers_collection', $params, $array_keys);
        return ifempty($event);
    }
}
