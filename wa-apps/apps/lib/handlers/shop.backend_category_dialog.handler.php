<?php

class appsShopBackend_category_dialogHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('shop.backend_category_dialog', $params, $array_keys);
    }
}
