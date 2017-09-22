<?php

class appsShopFrontend_checkout_stock_rulesHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('shop.frontend_checkout_stock_rules', $params, $array_keys);
    }
}
