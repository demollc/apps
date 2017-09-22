<?php

class appsShopProduct_deleteHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('shop.product_delete', $params, $array_keys);
    }
}
