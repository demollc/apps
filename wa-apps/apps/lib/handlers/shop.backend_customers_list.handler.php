<?php

class appsShopBackend_customers_listHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('shop.backend_customers_list', $params, $array_keys);
    }
}
