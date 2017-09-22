<?php

class appsShopBackend_settingsHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('shop.backend_settings', $params, $array_keys);
    }
}
