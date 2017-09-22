<?php

class appsShopProduct_saveHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('shop.product_save', $params, $array_keys);
    }
}
