<?php

class appsShopFrontend_headerHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('shop.frontend_header', $params, $array_keys);
    }
}
