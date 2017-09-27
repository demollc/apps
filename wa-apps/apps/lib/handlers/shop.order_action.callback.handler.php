<?php

class appsShopOrder_actioncallbackHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
		$event = wa('apps')->event('shop.order_action.callback', $params, $array_keys);
        return ifempty($event);
    }
}
