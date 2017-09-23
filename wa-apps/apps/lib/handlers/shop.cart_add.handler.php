<?php

class appsShopCart_addHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
		$event = wa('apps')->event('shop.cart_add', $params, $array_keys);
        return ifempty($event);
    }
}
