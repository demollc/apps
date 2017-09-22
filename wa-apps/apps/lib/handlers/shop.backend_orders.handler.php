<?php

class appsShopBackend_ordersHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('shop.backend_orders', $params, $array_keys);
    }
}
