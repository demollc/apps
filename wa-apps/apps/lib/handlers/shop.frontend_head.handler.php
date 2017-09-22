<?php

class appsShopFrontend_headHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('shop.frontend_head', $params, $array_keys);
    }
}
