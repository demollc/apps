<?php

class appsShopBackend_productsHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
		$event = wa('apps')->event('shop.backend_products', $params, $array_keys);
        return ifempty($event);
    }
}
