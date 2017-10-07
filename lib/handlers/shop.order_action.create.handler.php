<?php

class appsShopOrder_actioncreateHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null)
    {
        $event = wa('apps')->event('shop.order_action.create', $params, $array_keys);
        return ifempty($event);
    }
}
