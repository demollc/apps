<?php

class appsShopCart_deleteHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('shop.cart_delete', $params, $array_keys);
    }
}
