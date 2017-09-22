<?php

class appsShopBackend_productHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('shop.backend_product', $params, $array_keys);
    }
}
