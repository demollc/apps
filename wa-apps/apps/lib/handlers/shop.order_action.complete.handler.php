<?php

class appsShopOrder_actioncompleteHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
		$event = wa('apps')->event('shop.order_action.complete', $params, $array_keys);
        return ifempty($event);
    }
}
