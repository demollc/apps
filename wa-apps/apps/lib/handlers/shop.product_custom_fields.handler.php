<?php

class appsShopProduct_custom_fieldsHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
		$event = wa('apps')->event('shop.product_custom_fields', $params, $array_keys);
        return ifempty($event);
    }
}
