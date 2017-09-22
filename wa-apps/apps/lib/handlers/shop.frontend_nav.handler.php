<?php

class appsShopFrontend_navHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('shop.frontend_nav', $params, $array_keys);
    }
}
