<?php

class appsShopReset_completeHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('shop.reset_complete', $params, $array_keys);
    }
}
