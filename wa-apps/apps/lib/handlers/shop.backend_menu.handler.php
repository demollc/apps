<?php

class appsShopBackend_menuHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('shop.backend_menu', $params, $array_keys);
    }
}
