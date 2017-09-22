<?php

class appsShopBackend_customersHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('shop.backend_customers', $params, $array_keys);
    }
}
