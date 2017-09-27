<?php

class appsShopOrder_action_formshipHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
		$event = wa('apps')->event('shop.order_action_form.ship', $params, $array_keys);
        return ifempty($event);
    }
}
