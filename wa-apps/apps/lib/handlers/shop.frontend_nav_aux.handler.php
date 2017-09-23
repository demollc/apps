<?php

class appsShopFrontend_nav_auxHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
		$event = wa('apps')->event('shop.frontend_nav_aux', $params, $array_keys);
        return ifempty($event);
    }
}
