<?php

class appsShopFrontend_errorHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null)
    {
        $event = wa('apps')->event('shop.frontend_error', $params, $array_keys);
        return ifempty($event);
    }
}
