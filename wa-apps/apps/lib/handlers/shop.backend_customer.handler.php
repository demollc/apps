<?php

class appsShopBackend_customerHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
		$event = wa('apps')->event('shop.backend_customer', $params, $array_keys);
        return ifempty($event);
    }
}
