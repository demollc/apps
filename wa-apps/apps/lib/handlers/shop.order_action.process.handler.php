<?php

class appsShopOrder_actionprocessHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null)
    {
        $event = wa('apps')->event('shop.order_action.process', $params, $array_keys);
        return ifempty($event);
    }
}
