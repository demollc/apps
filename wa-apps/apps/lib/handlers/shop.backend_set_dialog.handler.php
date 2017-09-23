<?php

class appsShopBackend_set_dialogHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
		$event = wa('apps')->event('shop.backend_set_dialog', $params, $array_keys);
        return ifempty($event);
    }
}
