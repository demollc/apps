<?php

class appsShopCustomers_mergeHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('shop.customers_merge', $params, $array_keys);
    }
}
