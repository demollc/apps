<?php

class appsShopRightsconfigHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null)
    {
        $event = wa('apps')->event('shop.rights.config', $params, $array_keys);
        return ifempty($event);
    }
}
