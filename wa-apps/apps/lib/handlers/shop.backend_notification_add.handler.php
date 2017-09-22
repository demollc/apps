<?php

class appsShopBackend_notification_addHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('shop.backend_notification_add', $params, $array_keys);
    }
}
