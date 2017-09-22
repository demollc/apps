<?php

class appsShopBackend_tutorialHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('shop.backend_tutorial', $params, $array_keys);
    }
}
