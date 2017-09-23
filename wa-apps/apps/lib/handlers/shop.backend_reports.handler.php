<?php

class appsShopBackend_reportsHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
		$event = wa('apps')->event('shop.backend_reports', $params, $array_keys);
        return ifempty($event);
    }
}
