<?php

class appsShopFrontend_cartHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('shop.frontend_cart', $params, $array_keys);
    }
}
