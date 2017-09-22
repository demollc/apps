<?php

class appsShopProduct_duplicateHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('shop.product_duplicate', $params, $array_keys);
    }
}
