<?php

class appsShopFrontend_my_affiliateHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('shop.frontend_my_affiliate', $params, $array_keys);
    }
}
