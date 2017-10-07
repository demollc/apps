<?php

class appsShopSignupHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null)
    {
        $event = wa('apps')->event('shop.signup', $params, $array_keys);
        return ifempty($event);
    }
}
