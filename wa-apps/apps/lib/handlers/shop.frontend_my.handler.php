<?php

class appsShopFrontend_myHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('shop.frontend_my', $params, $array_keys);
    }
}
