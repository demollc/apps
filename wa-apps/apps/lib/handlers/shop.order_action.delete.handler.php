<?php

class appsShopOrder_actiondeleteHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
		$event = wa('apps')->event('shop.order_action.delete', $params, $array_keys);
        return ifempty($event);
    }
}
