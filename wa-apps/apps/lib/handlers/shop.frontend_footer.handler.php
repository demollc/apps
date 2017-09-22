<?php

class appsShopFrontend_footerHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('shop.frontend_footer', $params, $array_keys);
    }
}
