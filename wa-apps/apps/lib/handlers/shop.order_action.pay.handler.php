<?php

class appsShopOrder_actionpayHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null)
    {
        $event = wa('apps')->event('shop.order_action.pay', $params, $array_keys);
        return ifempty($event);
    }
}
