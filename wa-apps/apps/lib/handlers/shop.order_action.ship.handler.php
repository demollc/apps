<?php

class appsShopOrder_actionshipHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
		$event = wa('apps')->event('shop.order_action.ship', $params, $array_keys);
        return ifempty($event);
    }
}
