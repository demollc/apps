<?php

class appsShopBackend_set_dialogHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('shop.backend_set_dialog', $params, $array_keys);
    }
}
