<?php

class appsShopSet_saveHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
		$event = wa('apps')->event('shop.set_save', $params, $array_keys);
        return ifempty($event);
    }
}
