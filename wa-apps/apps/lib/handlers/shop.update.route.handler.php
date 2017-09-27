<?php

class appsShopUpdaterouteHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
		$event = wa('apps')->event('shop.update.route', $params, $array_keys);
        return ifempty($event);
    }
}
