<?php

class appsShopOrder_actioncommentHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null)
    {
        $event = wa('apps')->event('shop.order_action.comment', $params, $array_keys);
        return ifempty($event);
    }
}
