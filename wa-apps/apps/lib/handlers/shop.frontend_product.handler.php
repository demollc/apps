<?php

class appsShopFrontend_productHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = array (
  0 => 'menu',
  1 => 'cart',
  2 => 'block_aux',
  3 => 'block',
)){
		$event = wa('apps')->event('shop.frontend_product', $params, $array_keys);
        return ifempty($event);
    }
}
