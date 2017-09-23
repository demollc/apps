<?php

class appsShopFrontend_myHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
		$event = wa('apps')->event('shop.frontend_my', $params, $array_keys);
        return ifempty($event);
    }
}
