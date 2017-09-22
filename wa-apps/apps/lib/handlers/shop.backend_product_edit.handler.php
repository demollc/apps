<?php

class appsShopBackend_product_editHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('shop.backend_product_edit', $params, $array_keys);
    }
}
