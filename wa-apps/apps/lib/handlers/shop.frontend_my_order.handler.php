<?php

class appsShopFrontend_my_orderHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
		$event = wa('apps')->event('shop.frontend_my_order', $params, $array_keys);
        return ifempty($event);
    }
}
