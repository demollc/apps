<?php

class appsShopRoutingHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
		$event = wa('apps')->event('shop.routing', $params, $array_keys);
        return ifempty($event);
    }
}
