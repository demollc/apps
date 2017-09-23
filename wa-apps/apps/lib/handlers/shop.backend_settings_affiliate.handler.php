<?php

class appsShopBackend_settings_affiliateHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
		$event = wa('apps')->event('shop.backend_settings_affiliate', $params, $array_keys);
        return ifempty($event);
    }
}
