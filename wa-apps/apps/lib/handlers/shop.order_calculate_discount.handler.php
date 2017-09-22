<?php

class appsShopOrder_calculate_discountHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('shop.order_calculate_discount', $params, $array_keys);
    }
}
