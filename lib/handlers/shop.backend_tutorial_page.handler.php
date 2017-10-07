<?php

class appsShopBackend_tutorial_pageHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null)
    {
        $event = wa('apps')->event('shop.backend_tutorial_page', $params, $array_keys);
        return ifempty($event);
    }
}
