<?php

class appsShopProduct_mass_updateHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('shop.product_mass_update', $params, $array_keys);
    }
}
