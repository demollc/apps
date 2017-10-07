<?php

class appsShopOrder_actionrestoreHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null)
    {
        $event = wa('apps')->event('shop.order_action.restore', $params, $array_keys);
        return ifempty($event);
    }
}
