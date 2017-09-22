<?php

class appsShopOrder_actioncreateHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('shop.order_action.create', $params, $array_keys);
    }
}
