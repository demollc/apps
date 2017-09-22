<?php

class appsShopCurrency_deleteHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('shop.currency_delete', $params, $array_keys);
    }
}
