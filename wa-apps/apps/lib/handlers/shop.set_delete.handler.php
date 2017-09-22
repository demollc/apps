<?php

class appsShopSet_deleteHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('shop.set_delete', $params, $array_keys);
    }
}
