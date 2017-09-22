<?php

class appsShopBackend_settings_discountsHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('shop.backend_settings_discounts', $params, $array_keys);
    }
}
