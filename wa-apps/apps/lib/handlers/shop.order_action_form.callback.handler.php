<?php

class appsShopOrder_action_formcallbackHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
		$event = wa('apps')->event('shop.order_action_form.callback', $params, $array_keys);
        return ifempty($event);
    }
}
