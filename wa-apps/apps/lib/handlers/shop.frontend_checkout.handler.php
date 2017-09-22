<?php

class appsShopFrontend_checkoutHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('shop.frontend_checkout', $params, $array_keys);
    }
}
