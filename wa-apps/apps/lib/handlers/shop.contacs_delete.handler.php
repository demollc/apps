<?php

class appsShopContacs_deleteHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
		$event = wa('apps')->event('shop.contacs_delete', $params, $array_keys);
        return ifempty($event);
    }
}
