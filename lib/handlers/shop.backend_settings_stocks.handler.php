<?php

class appsShopBackend_settings_stocksHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null)
    {
        $event = wa('apps')->event('shop.backend_settings_stocks', $params, $array_keys);
        return ifempty($event);
    }
}
