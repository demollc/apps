<?php

class appsShopBackend_reports_channelsHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
		$event = wa('apps')->event('shop.backend_reports_channels', $params, $array_keys);
        return ifempty($event);
    }
}
