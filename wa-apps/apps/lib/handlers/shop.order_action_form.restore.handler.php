<?php

class appsShopOrder_action_formrestoreHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null)
    {
        $event = wa('apps')->event('shop.order_action_form.restore', $params, $array_keys);
        return ifempty($event);
    }
}
