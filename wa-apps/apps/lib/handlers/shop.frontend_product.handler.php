<?php

class appsShopFrontend_productHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = array("menu", "cart", "block_aux", "block"))
    {
        $event = wa('apps')->event('shop.frontend_product', $params, $array_keys);
        return ifempty($event);
    }
}
