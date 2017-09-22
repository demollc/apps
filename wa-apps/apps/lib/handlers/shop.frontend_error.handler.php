<?php

class appsShopFrontend_errorHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('shop.frontend_error', $params, $array_keys);
    }
}
