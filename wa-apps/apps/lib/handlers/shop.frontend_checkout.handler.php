<?php

class appsShopFrontend_checkoutHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
		$event = wa('apps')->event('shop.frontend_checkout', $params, $array_keys);
        return ifempty($event);
    }
}
