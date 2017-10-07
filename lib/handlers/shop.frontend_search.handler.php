<?php

class appsShopFrontend_searchHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null)
    {
        $event = wa('apps')->event('shop.frontend_search', $params, $array_keys);
        return ifempty($event);
    }
}
