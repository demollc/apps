<?php

class appsShopCart_addHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('shop.cart_add', $params, $array_keys);
    }
}
