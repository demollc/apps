<?php

class appsShopResetHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
		$event = wa('apps')->event('shop.reset', $params, $array_keys);
        return ifempty($event);
    }
}
