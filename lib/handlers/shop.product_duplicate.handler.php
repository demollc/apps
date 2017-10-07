<?php

class appsShopProduct_duplicateHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null)
    {
        $event = wa('apps')->event('shop.product_duplicate', $params, $array_keys);
        return ifempty($event);
    }
}
