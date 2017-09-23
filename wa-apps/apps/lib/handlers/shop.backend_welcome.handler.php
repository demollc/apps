<?php

class appsShopBackend_welcomeHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
		$event = wa('apps')->event('shop.backend_welcome', $params, $array_keys);
        return ifempty($event);
    }
}
